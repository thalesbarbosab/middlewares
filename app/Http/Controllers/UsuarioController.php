<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /*
    public function __construct() {
        $this->middleware('primeiro');
    }
    */
    public function index(){
        return view('index');
    }
}
