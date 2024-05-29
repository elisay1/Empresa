<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $servicios = Servicio::get();
           //TODO: Podemos utilizar el método latest(), que recibe como parámetro el
            //nombre de la columna que queremos ordenar de forma descendente. 
           //$servicios = Servicio::latest('titulo')->get();
          //TODO: Si queremos ordenarlo por algún campo específico:
           //$servicios = Servicio::orderBy('titulo', 'asc')->get();
           //TODO:Para paginar el resultado usamos el método paginate(); por defecto se muestran 15 por página
           //Colocamos los enlaces en servicios.blade.php usando el método links()
           //$servicios = Servicio::latest()->paginate(2);

            return view('menu.servicios', compact('servicios'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //return view('menu.servicio', compact('servicio'));
        //return Servicio::find($id);
        //return view('menu.show',[
        //'servicios' => Servicio::find('$id')]);
        //$servicio = Servicio::findOrFail($id);
        //return view('menu.show', compact('servicio'));
        $servicio = Servicio::find($id);

        if (!$servicio) {
            return redirect()->back()->with('error', 'Servicio no encontrado');
        }

        return view('menu.show', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
}
