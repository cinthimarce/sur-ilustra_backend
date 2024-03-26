<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ApiController extends Controller
{
    public function obtenerProductos($categoria = null)
    {
        $obtenerProductos = DB::select('CALL spObtenerProductos(?)', array(($categoria == null ? '' : Str::ucfirst($categoria))));
        $data = json_decode(collect($obtenerProductos)->toJson());
        return response()->json($data, 200, ['Content-Type => application/json']);
    }
}
