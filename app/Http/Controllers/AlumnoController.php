<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    //CRUD (create, read, update, delete)
    //Se usa mayormente en funcionalidades de tipo gerencial (Gestionar)
   //Se usar para listar elementos (GET)
    public function index()
    {
        //
    }

    //guardar elementos o crearlos (POST)
    public function store(Request $request)
    {
        //
    }

    //mostrar un elemento de la lista (GET)
    public function show($alumno)
    {
        //
    }

    // Modificar un elemento (POST) (PUT)
    public function update(Request $request)
    {
        //
    }

    // Eliminar un elemento (POST) (DELETE)
    public function destroy(Alumno $alumno)
    {
        //
    }
}
