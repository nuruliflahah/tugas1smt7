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
    
}
