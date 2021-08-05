<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorTareasController extends Controller
{

    public $listaTareas = ['Tarea1', 'Tarea2', 'Tarea3'];

    public function index(){
        $title = '<h1>Listado de tareas</h1>';
        $age = 0;

        return view(
            'administradorTareas.index',
            [
                'title' => $title,
                'age' => $age,
                'listaTareas' => $this->listaTareas
            ]
        );
    }

    public function create(){
        return view('administradorTareas.create');
    }

    public function edit(){
        return view('administradorTareas.edit');
    }

    public function detail($id){
        return view('administradorTareas.detail');
    }
}
