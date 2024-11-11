<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelajaran;
use App\Http\Controllers\Controller;

class PelajaranController extends Controller

{
    public Function index()
    {
        $data = Pelajaran::all();
        return response()->json($data);
    }
    public function create(Request $request)
    {
        $data = new Pelajaran();
        $data->nama = $request->input('nama pelajaran');
        $data->waktu = $request->input('waktu');
        $data->hari = $request->input('hari');

        $date->save();
        echo "<h3>Berikut data keterangan pelajaran/h3";

        return response()-> json($id);

    }

    public function show($id)
    {
        $data = Pelajaran::find($id);
        return response()-> json($data);

    }

    public function update(Request $request, $id)
    {
        $data = Guru::find($id);
        $data->nama = $request->input('nama pelajaran');
        $data->waktu = $request->input('waktu');
        $data->hari = $request->input('hari');


        $data->save();
        echo "<h3>Data keterangan guru berhasil diubah</h3>";

        return response()-> json($data);

    }

    public function destroy($id)
    {
        $data = Pelajaran::find($id);
        $data->delete();

        return response()-> json('Data berhasil terhapus');
    }
}
    
  
