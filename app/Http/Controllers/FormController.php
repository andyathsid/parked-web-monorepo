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
        \dd($request);
        $uploadedData = [
            'vm-file' => 'https://raw.githubusercontent.com/andyathsid/parked-ml-backend/refs/heads/dev/data/raw/FB1cdaopmoe67M2605161917.wav',
            // 'sd-file' => null,
            // 'ni-file' => null
        ];
        // \dd($uploadedData);
        // if ($request->hasFile('fileModel1')) {
        //     $imagePath = $request->file('fileModel1')->store('file_modul1', 'public');
        //     $uploadedData['vm_file'] = $imagePath;
        // }

        // if ($request->hasFile('fileModel2')) {
        //     $audioPath = $request->file('fileModel2')->store('file_modul2', 'public');
        //     $uploadedData['sd-file'] = $audioPath;
        // } elseif ($request->input('recordedAudio')) {
        //     $audioData = $request->input('recordedAudio');
        //     $audioData = str_replace('data:audio/wav;base64,', '', $audioData);
        //     $audioData = base64_decode($audioData);
        //     $audioPath = 'audios/recorded-' . time() . '.wav';
        //     Storage::disk('public')->put($audioPath, $audioData);
        //     $uploadedData['sd-file'] = $audioPath;
        // }

        // if ($request->hasFile('fileModel3')) {
        //     $fileModel3 = $request->file('fileModel3')->store('file_modul3', 'public');
        //     $uploadedData['ni-file'] = $fileModel3;
        // }
        // \dd($uploadedData);

        $response = Http::post('https://91qptmtp7e.execute-api.ap-southeast-1.amazonaws.com/test/predict', $uploadedData);

        // Periksa respons dari API
        if ($response->successful()) {
            // Respons berhasil
            return response()->json([
                'success' => true,
                'data' => $response->json(),
            ]);
        } else {
            // Respons gagal
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengirim data ke API.',
                'error' => $response->body(),
            ], $response->status());
        }

        \dd($uploadedData);

        // cek Json
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diupload!',
            'data' => $uploadedData
        ], 200);
    }
}
