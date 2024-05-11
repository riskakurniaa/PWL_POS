<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }
    public function prosesFileUpload(Request $request)
    {
        $request->validate(['berkas' => 'required|file|image|max:500']);
        $extFile = $request->berkas->getClientOriginalName();
        $namaFile = 'web-' . time() . "." . $extFile;
        $path = $request->berkas->storeAs('public', $namaFile);

        $pathBaru = asset('storage/' . $namaFile);
        echo "proses upload berhasil, data disimpan pada: $path";
        echo "<br>";
        echo "Tampilkan link:<a href='$pathBaru'>$pathBaru</a>";
    }
}
