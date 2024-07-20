<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller {
    public function index() {
        $servicios = Servicio::all();
        return view('servicios.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicios.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar los datos recibidos en el formulario
        $validatedData=$request->validate([
            'titulo'=>'required|string|max:20',
            'descripcion'=>'required|string',
        ]);

        //Crear y guardar un nuevo servicio
        $servicio=new Servicio();
        $servicio->titulo=$validatedData['titulo'];
        $servicio->descripcion=$validatedData['descripcion'];
        $servicio->save(); //guardar en la base de datos

        //Redirigir a la lista de servicios con mensaje de exito
        return redirect()->route('servicios.index')->with('sucess','Servicio registrado exitosamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $servicio = Servicio::findOrFail($id);
        return view('servicios.show', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        $servicio = Servicio::findOrFail($id);
        return view('servicios.edit', compact('servicio'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:20',
            'descripcion' => 'required|string',
        ]);

        $servicio = Servicio::findOrFail($id);
        $servicio->titulo = $validatedData['titulo'];
        $servicio->descripcion = $validatedData['descripcion'];
        $servicio->save();

        return redirect()->route('servicios.index')->with('success', 'Servicio actualizado exitosamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $servicio = Servicio::findOrFail($id);
        $servicio->delete();

        return redirect()->route('servicios.index')->with('success', 'Servicio eliminado exitosamente');
    }
}
