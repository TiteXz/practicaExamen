<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Coche;

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

        // DB::table('coches')->insert([
        //     'nombre' => $request->input('nombre'),
        //     'marca' => $request->input('marca'),
        //     'precio' => $request->input('precio'),
        //     'color' => $request->input('color'),
        // ]);

        Coche::create([
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

    public function showCoches()
    {
        // $coches = DB::table('coches')->select('marca', 'nombre', 'color', 'precio')->get();

        $coches = Coche::select('id', 'marca', 'nombre', 'color', 'precio')->get();

        return view('verCoches')->with(compact('coches'));
    }


    public function showEditForm($id)
    {
        $coche = Coche::find($id);

        if (!$coche) {
            return redirect()->route('verCoches')->with('error', 'Coche no encontrado.');
        }

        return view('editar', compact('coche'));
    }


    public function actualizar(Request $request, $id)
    {
        $coche = Coche::find($id);

        if (!$coche) {
            return redirect()->route('verCoches')->with('error', 'Coche no encontrado.');
        }

        $coche->update([
            'nombre' => $request->input('nombre'),
            'marca' => $request->input('marca'),
            'precio' => $request->input('precio'),
            'color' => $request->input('color'),
        ]);

        return redirect()->route('verCoches')->with('success', 'Coche actualizado correctamente.');
    }

    public function eliminar($id)
    {
        $coche = Coche::find($id);

        if (!$coche) {
            return redirect()->route('verCoches')->with('error', 'Coche no encontrado.');
        }

        $coche->delete();

        return redirect()->route('verCoches')->with('success', 'Coche eliminado correctamente.');
    }


}