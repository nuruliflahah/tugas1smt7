<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Http\Controllers\Controller;

class GuruController extends Controller
{
        public Function index()
        {
            $data = Absensi::all();
            return response()->json($data);
        }
    
        public function create(Request $request)
        {
            $data = new Absensi();
            $data->tanggal = $request->input('tanggal');
            $data->id_guru = $request->input('id_guru');
            $data->id_pelajaran = $request->input('id_pelajaran');
            $data->status = $request->input('status');
    
            $date->save();
            echo "<h3>Berikut data keterangan absensi/h3";
    
            return response()-> json($id);
    
        }
    
        public function show($id)
        {
            $data = Guru::find($id);
            return response()-> json($data);
    
        }
    
        public function update(Request $request, $id)
        {
            $data = Guru::find($id);
            $data->nama = $request->input('nama');
            $data->id_pelajaran = $request->input('id_pelajaran');
            $data->jabatan = $request->input('jabatan');
            $data->waktu = $request->input('waktu');
    
            $data->save();
            echo "<h3>Data keterangan guru berhasil diubah</h3>";
    
            return response()-> json($data);
    
        }
    
        public function destroy($id)
        {
            $data = Guru::find($id);
            $data->delete();
    
            return response()-> json('Data berhasil terhapus');
        }
    }   
