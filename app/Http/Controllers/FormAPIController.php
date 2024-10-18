<?php

namespace App\Http\Controllers;

use App\Models\FormSubmission;


use Illuminate\Http\Request;

class FormAPIController extends Controller
{
    // Menampilkan semua pengajuan
    public function index()
    {
        return FormSubmission::all();
    }

    // Menyimpan pengajuan baru
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'file_paths' => 'nullable|json',
        ]);

        $submission = FormSubmission::create($request->all());
        return response()->json($submission, 201); // Mengembalikan status 201 Created
    }

    // Menampilkan pengajuan tertentu
    public function show(FormSubmission $formSubmission)
    {
        return $formSubmission;
    }

    // Mengupdate pengajuan tertentu
    public function update(Request $request, FormSubmission $formSubmission)
    {
        // Validasi data
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|max:255',
            'message' => 'sometimes|required|string',
            'file_paths' => 'nullable|json',
        ]);

        $formSubmission->update($request->all());
        return response()->json($formSubmission, 200); // Mengembalikan status 200 OK
    }

    // Menghapus pengajuan tertentu
    public function destroy(FormSubmission $formSubmission)
    {
        $formSubmission->delete();
        return response()->json(null, 204); // Mengembalikan status 204 No Content
    }
}
