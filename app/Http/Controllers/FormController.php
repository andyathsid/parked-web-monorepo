<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\FormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\FlareClient\Api;

class FormController extends Controller
{
    public function index()
    {
        $submissions = FormSubmission::all();
        return view('tabel', compact('submissions'));
    }
    public function coba(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('uploads', 'public');
        }

        // \dd($filePath);
        FormSubmission::create([
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'file_paths' => $filePath,
        ]);

        return response()->json([
            'success' => true,
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'file_path' => isset($filePath) ? $filePath : null,
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mdvpFo' => 'required|numeric',
            'mdvpFhi' => 'required|numeric',
            'mdvpFlo' => 'required|numeric',
            'mdvpJitter' => 'required|numeric',
            'mdvpJitterAbs' => 'required|numeric',
            'mdvpRAP' => 'required|numeric',
            'mdvpPPQ' => 'required|numeric',
            'jitterDDP' => 'required|numeric',
            'mdvpShimmer' => 'required|numeric',
            'mdvpShimmerDb' => 'required|numeric',
            'shimmerAPQ3' => 'required|numeric',
            'shimmerAPQ5' => 'required|numeric',
            'mdvpAPQ' => 'required|numeric',
            'shimmerDDA' => 'required|numeric',
            'nhr' => 'required|numeric',
            'hnr' => 'required|numeric',
            'rpde' => 'required|numeric',
            'dfa' => 'required|numeric',
        ]);
        return response()->json([
            'success' => true,
            'data' => $validatedData,
            'message' => 'Data berhasil diterima.'
        ], 200);
    }

    public function pastientUpload(Request $request)
    {
        $request->validate([
            'fileImage' => 'nullable|image|mimes:jpg,png|max:61440',
            'audioUplod' => 'nullable|mimes:mp3,wav|max:61440',
            'mdvpFo' => 'nullable|numeric',
            'mdvpFhi' => 'nullable|numeric',
            'mdvpFlo' => 'nullable|numeric',
            'mdvpJitter' => 'nullable|numeric',
            'mdvpJitterAbs' => 'nullable|numeric',
            'mdvpRAP' => 'nullable|numeric',
            'mdvpPPQ' => 'nullable|numeric',
            'jitterDDP' => 'nullable|numeric',
            'mdvpShimmer' => 'nullable|numeric',
            'mdvpShimmerDb' => 'nullable|numeric',
            'shimmerAPQ3' => 'nullable|numeric',
            'shimmerAPQ5' => 'nullable|numeric',
            'mdvpAPQ' => 'nullable|numeric',
            'shimmerDDA' => 'nullable|numeric',
            'nhr' => 'nullable|numeric',
            'hnr' => 'nullable|numeric',
            'rpde' => 'nullable|numeric',
            'dfa' => 'nullable|numeric',
        ]);
        $uploadedData = [
            'image' => null,
            'audio' => null,
            'inputs' => $request->only([
                'mdvpFo',
                'mdvpFhi',
                'mdvpFlo',
                'mdvpJitter',
                'mdvpJitterAbs',
                'mdvpRAP',
                'mdvpPPQ',
                'jitterDDP',
                'mdvpShimmer',
                'mdvpShimmerDb',
                'shimmerAPQ3',
                'shimmerAPQ5',
                'mdvpAPQ',
                'shimmerDDA',
                'nhr',
                'hnr',
                'rpde',
                'dfa',
            ]),
        ];
        // \dd($uploadedData);
        if ($request->hasFile('fileImage')) {
            $imagePath = $request->file('fileImage')->store('images', 'public');
            $uploadedData['image'] = $imagePath;
        }

        if ($request->hasFile('audioUpload')) {
            $audioPath = $request->file('audioUpload')->store('audios', 'public');
            $uploadedData['audio'] = $audioPath;
        } elseif ($request->input('recordedAudio')) { // masih belum dapet nilai ntar dibenerin
            $audioData = $request->input('recordedAudio');
            $audioData = str_replace('data:audio/wav;base64,', '', $audioData);
            $audioData = base64_decode($audioData);
            $audioPath = 'audios/recorded-' . time() . '.wav';
            Storage::disk('public')->put($audioPath, $audioData);
            $uploadedData['audio'] = $audioPath;
        }
        \dd($uploadedData);
        // Kirim data Ke API Link
        $response = Http::post('https://events.launchdarkly.com/events/bulk/60645109ece3b60c64ac5e02', $uploadedData);

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

        // \dd($uploadedData); 

        // cek Json
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diupload!',
            'data' => $uploadedData
        ], 200);
    }
}
