<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CocheControlador extends Controller
{

    public function insertar(Request $request)
    {
    //     $nombre = $request->input('nombre');
    //     $marca = $request->input('marca');
    //     $precio = $request->input('precio');
    //     $color = $request->input('color');

    //     DB::table('coches')->insert([
    //         'nombre' => $nombre,
    //         'marca' => $marca,
    //         'precio' => $precio,
    //         'color' => $color,
    //     ]);

        DB::table('coches')->insert([
            'nombre' => $request->input('nombre'),
            'marca' => $request->input('marca'),
            'precio' => $request->input('precio'),
            'color' => $request->input('color'),
        ]);

        return redirect()->route('insertar')->with('success', 'Coche insertado correctamente.');
    }

    public function showInsertForm()
{
    return view('insertar');
}

    public function showCoches(){
        $coches = DB::table('coches')->select('marca', 'nombre', 'color', 'precio')->get();

        return view('verCoches')->with(compact('coches'));
    }

}