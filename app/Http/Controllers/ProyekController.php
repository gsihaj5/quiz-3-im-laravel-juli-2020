<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProyekController extends Controller
{
    public function create(){

    }

    public function store(){

    }

    public function index(){
        $proyek = DB::table('proyek') -> get();
        return view('daftarProyek', compact('proyek'));
    }

    public function show(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
    //
}
