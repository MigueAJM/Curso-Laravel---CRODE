<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saludo extends Controller
{
    public function saludar(){
        echo 'Hola mundo';
    }
}
