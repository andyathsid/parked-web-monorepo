<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Spatie\FlareClient\Api;

class FormController extends Controller
{

    public function pastientUpload(Request $request)
    {
        $request->validate([
            'fileModel1' => 'nullable|image|mimes:jpg,png|max:6144',
            'fileModel2' => 'nullable|max:30720',
            'fileModel3' => 'nullable|image|mimes:jpg,png|max:6144',
            'recordedAudio' => 'nullable'
        ]);

        // \dd($request['recordedAudio']);
        if (!$request->hasFile('fileModel1') && !$request->hasFile('fileModel2') && !$request->hasFile('recordedAudio') && !$request->hasFile('fileModel3')) {
            session()->flash('gagal', 'Anda harus mengunggah minimal satu file!');
            return redirect()->back();
        }

        // Tambahkan logika jika kedua file terisi
        if ($request->hasFile('fileModel2') && $request->hasFile('recordedAudio')) {
            session()->flash('gagal', 'Silakan pilih salah satu: Tes Rekam Audio atau Upload File. Kedua opsi tidak dapat digunakan bersamaan.');
            return redirect()->back();
        }

        $uploadedData = [
            'vm-url' => null,
            'hw-url' => null,
            'ni-url' => null,
        ];

        if ($request->hasFile('fileModel1')) {
            $fileModel1 = $request->file('fileModel1')->store('file_modul1', 'public');
            $uploadedData['hw-url'] = url('storage/' . $fileModel1);
        }

        if ($request->hasFile('fileModel2')) {
            $audioPath = $request->file('fileModel2')->store('file_modul2', 'public');
            $uploadedData['vm-url'] = url('storage/' . $audioPath);
        } elseif ($request->hasFile('recordedAudio')) {
            $audioData = $request->file('recordedAudio');
            $audioData = str_replace('data:audio/wav;base64,', '', $audioData);
            $audioData = base64_decode($audioData);
            $audioPath = 'audios/recorded-' . time() . '.wav';
            Storage::disk('public')->put($audioPath, $audioData);
            $uploadedData['vm-url'] = url('storage/' . $audioPath);
        }

        if ($request->hasFile('fileModel3')) {
            $fileModel3 = $request->file('fileModel3')->store('file_modul3', 'public');
            $uploadedData['ni-url'] = url('storage/' . $fileModel3);
        }

        // dd($uploadedData);
        // $uploadedData['hw-url'] = 'https://parked.my.id/storage/file_modul1/17UtzjQEtaKml7vF92Vn3qdvEZEcEk2zfngdiCxl.jpg';
        // $uploadedData['vm-url'] = 'https://parked.my.id/storage/file_modul2/099mlDBsKJVDhjCJNWtr4IfgPnYYUcDTCCWYzumd.wav';
        // $uploadedData['ni-url'] = 'https://parked.my.id/storage/file_modul3/0Nc2if8qqObwz25Qv1o8YlpIY9wnesxIB6UAEhBC.jpg';

        $filteredData = array_filter($uploadedData, function ($value) {
            return !is_null($value);
        });
        // dd($filteredData);

        $url = rtrim(config('services.api_diagnosis_url'), '/') . '/api/predict';
        $response = Http::post($url, $filteredData);
        // $response = Http::post('https://6suy7b2n3j.execute-api.ap-southeast-1.amazonaws.com/test/detect', $uploadedData);

        if ($response->successful()) {
            $apiResponse = $response->json();
            // \dd($fileModel1);
            // if ($request->fileModel3 != NULL) {
            // return response()->json([
            //     'success' => true,
            //     'data' => $apiResponse,
            //     'upload' => $uploadedData
            // ]);
            // if (!isset($apiResponse['hw-result'], $apiResponse['vm-result'], $apiResponse['ni-result'])) {
            //     return redirect()->route('form-diagnosa')->with('gagal', 'Format respons dari server tidak valid.');
            // }
            if ($apiResponse == true || $apiResponse == false) {
                if ($apiResponse == NULL) {
                    return redirect()->route('form-diagnosa')->with('gagal', 'Kesalahan dalam membaca data!');
                } else {
                    DB::table('form')->insert([
                        'user_id' => auth()->id(),
                        'file_diagnosa1' => $fileModel1 ?? null,
                        'file_diagnosa2' => $audioPath ?? null,
                        'file_diagnosa3' => $fileModel3 ?? null,
                        'hasil_diagnosa1' => $apiResponse['hw-result'] ?? null,
                        'hasil_diagnosa2' => $apiResponse['vm-result'] ?? null,
                        'hasil_diagnosa3' => $apiResponse['ni-result'] ?? null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                    session(['apiResponse' => $apiResponse]);

                    // Redirect ke halaman sukses
                    return response()->json([
                        'redirect' => route('result') // Ganti dengan rute yang sesuai
                    ]);
                    // return redirect()->route('result')->with('success', 'Data berhasil diproses!');
                }
            } else {
                return redirect()->route('form-diagnosa')->with('gagal', 'Server Gagal Merespons');
            }
            // }
        } else {
            return redirect()->route('form-diagnosa')->with('gagal', 'Data yang dikirim Gagal Di proses!');
        }
    }
    public function hasil()
    {
        $user = Auth::user();
        $tittle = 'Hasil Diagnosa';

        // Ambil apiResponse dari session
        $apiResponse = session('apiResponse');

        if (!$apiResponse) {
            return redirect()->route('form-diagnosa')->with('gagal', 'Tidak ada data untuk ditampilkan.');
        }

        return view('frontend.resultDiagnosa', compact('user', 'tittle', 'apiResponse'));
    }
}
