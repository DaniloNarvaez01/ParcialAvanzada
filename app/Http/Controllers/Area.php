<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Area extends Controller
{
    public function vistaAreas(){
        $area = DB::table('areaconocimiento')->get();
        return view('area.area', ['area'=> $area]);
    }

}
