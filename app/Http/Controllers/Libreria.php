<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Libreria extends Controller
{
    public function vistaLibreria(){
        return view('area.area');
    }
}
