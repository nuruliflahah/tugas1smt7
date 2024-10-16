<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Http\Controllers\Controller;


class GuruController extends Controller
{
    public Function index()
    {
        $data = Guru::all();
        return response()->json($data);
    }
}