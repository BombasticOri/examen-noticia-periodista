<?php

namespace App\Http\Controllers;

use App\Models\Periodista;
use Illuminate\Http\Request;

class PeriodistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodistas = Periodista::all();
        return view('periodista.index', compact('periodistas'));
    }

    public function create()
    {
        return view('periodista.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'edad' => 'required',
            'especialidad' => 'required',
            'numerocelular' => 'required',
        ]);

        $periodista = new Periodista();
        $periodista->nombres = $request->get('nombres');
        $periodista->apellidos = $request->get('apellidos');
        $periodista->edad = $request->get('edad');
        $periodista->especialidad = $request->get('especialidad');
        $periodista->numerocelular = $request->get('numerocelular');

        $periodista->save();

        return redirect('/periodistas');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $periodista = Periodista::find($id);
        return view('periodista.edit', compact('periodista'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'edad' => 'required',
            'especialidad' => 'required',
            'numerocelular' => 'required',
        ]);

        $periodista = Periodista::find($id);
        $periodista->nombres = $request->get('nombres');
        $periodista->apellidos = $request->get('apellidos');
        $periodista->edad = $request->get('edad');
        $periodista->especialidad = $request->get('especialidad');
        $periodista->numerocelular = $request->get('numerocelular');


        $periodista->save();

        return redirect('/periodistas');
    }

    public function destroy($id)
    {
        $periodista = Periodista::find($id);
        $periodista->delete();
        return redirect('/periodistas');
    }
}
