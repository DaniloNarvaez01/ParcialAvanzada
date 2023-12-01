<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Libro extends Controller
{
    public function vistaLibros(){
        $libro = DB::table('libro')
                    ->join('areaconocimiento','area', '=', 'idArea' )->get();
        return view('libro.libro', ['libro'=> $libro]);
    }
}
