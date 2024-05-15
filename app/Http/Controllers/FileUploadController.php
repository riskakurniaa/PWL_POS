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

        $path = $request->berkas->move('gambar', $namaFile);
        $path = str_replace("\\", "//", $path);
        echo "Variabel path berisi: $path <br>";

        $pathBaru = asset('gambar/' . $namaFile);
        echo "proses upload berhasil, data disimpan pada: $path";
        echo "<br>";
        echo "Tampilkan link:<a href='$pathBaru'>$pathBaru</a>";
    }

    public function fileUploadRename()
    {
        return view('file-upload-rename');
    }
    public function prosesFileUploadRename(Request $request)
    {
        $request->validate([
            'berkas' => 'required|file|image|max:500',
            'nama_gambar' => 'required|string|min:5'
        ]);

        $extFile = $request->berkas->getClientOriginalExtension();
        $namaFile = $request->input('nama_gambar') . '.' . $extFile;

        $path = $request->berkas->move('gambar', $namaFile);
        $pathBaru = asset('gambar/' . $namaFile);
        echo "Gambar berhasil di upload ke <a href='$pathBaru'>$namaFile</a>";
        echo "<br>";
        echo "<img src='$pathBaru' alt='Uploaded File'>";
    }
}
