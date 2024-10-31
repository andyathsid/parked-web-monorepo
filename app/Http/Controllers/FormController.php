<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\FlareClient\Api;

class FormController extends Controller
{

    public function pastientUpload(Request $request)
    {
        $request->validate([
            'fileModel1' => 'nullable|image|mimes:jpg,png|max:61440',
            'fileModel2' => 'nullable|mimes:mp3,wav|max:61440',
            'fileModel3' => 'nullable|image|mimes:jpg,png|max:61440',
        ]);
        // \dd($request);
        $uploadedData = [
            'vm-url' => 'https://drive.google.com/uc?export=download&id=1LXfVMjs16Mb4JTbTAStBUxtqrOB5G6Zf',
            'hw-url' => null,
            'ni-url' => null
        ];

        if ($request->hasFile('fileModel1')) {
            $imagePath = $request->file('fileModel1')->store('file_modul1', 'public');
            $uploadedData['sd-file'] = url('storage/' . $imagePath);
        }

        if ($request->hasFile('fileModel2')) {
            $audioPath = $request->file('fileModel2')->store('file_modul2', 'public');
            $uploadedData['vm-url'] = url('storage/' . $audioPath);
        } elseif ($request->input('recordedAudio')) {
            $audioData = $request->input('recordedAudio');
            $audioData = str_replace('data:audio/wav;base64,', '', $audioData);
            $audioData = base64_decode($audioData);
            $audioPath = 'audios/recorded-' . time() . '.wav';
            Storage::disk('public')->put($audioPath, $audioData);
            $uploadedData['vm-url'] = url('storage/' . $audioPath);
        }

        if ($request->hasFile('fileModel3')) {
            $fileModel3 = $request->file('fileModel3')->store('file_modul3', 'public');
            $uploadedData['ni-file'] = url('storage/' . $fileModel3);
        }


        // Kirim POST request
        $response = Http::post('https://91qptmtp7e.execute-api.ap-southeast-1.amazonaws.com/test/predict', $uploadedData);

        // Periksa respons dari API
        if ($response->successful()) {
            // Respons berhasil
            return response()->json([
                'success' => true,
                'data' => $response->json(),
                'upload' => $uploadedData
            ]);
        } else {
            // Respons gagal
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengirim data ke API.',
                'error' => $response->body(),
            ], $response->status());
        }
        echo $response;
        \dd();

        // cek Json
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diupload!',
            'data' => $uploadedData
        ], 200);
    }
}
