<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetasController extends Controller
{
    public function __invoke(Request $request) {

        $recetas = ['Receta Pizza', 'Receta Hamburguesa', 'Receta Tacos'];
        $categorias = ['Comida Méxicana', 'Comida Argentina', 'Postres'];

        // recetas es la carpeta, index es el nombre del archivo
        // con with indicamos que cargue la informacion que esta en $variable conla vista
        // que se encuentra en las comillas
        return view('recetas.index')
                ->with('recetas', $recetas)
                ->with('categorias', $categorias);

        // La forma de abajo sirve para regresar un objeto JSON como respuesta
        // $recetas = [
        //     'nombre' => 'Pizza Hawaiana',
        //     'descripcion' => 'Prepara la mejor pizza'
        // ];
        // return $recetas;
    }
}
