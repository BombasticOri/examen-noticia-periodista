<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Periodista;
use Illuminate\Http\Request;
use PHPUnit\Framework\Error\Notice;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::all();
        return view('noticia.index', compact('noticias'));
    }

    public function create()
    {   
        $periodistas = Periodista::all();
        return view('noticia.create', compact('periodistas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pais' => 'required',
            'ciudad' => 'required',
            'distrito' => 'required',
            'periodista_id' => 'required',
        ]);

        $noticia = new Noticia();
        $noticia->pais = $request->get('pais');
        $noticia->ciudad = $request->get('ciudad');
        $noticia->distrito = $request->get('distrito');
        $noticia->periodista_id = $request->get('periodista_id');

        $noticia->save();

        return redirect('/noticias');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $periodistas = Periodista::all();
        $noticia = Noticia::find($id);
        return view('noticia.edit', compact(['noticia', 'periodistas']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pais' => 'required',
            'ciudad' => 'required',
            'distrito' => 'required',
            'periodista_id' => 'required',
        ]);

        $noticia = Noticia::find($id);
        $noticia->pais = $request->get('pais');
        $noticia->ciudad = $request->get('ciudad');
        $noticia->distrito = $request->get('distrito');
        $noticia->periodista_id = $request->get('periodista_id');

        $noticia->save();

        return redirect('/noticias');
    }

    public function destroy($id)
    {
        $noticia = Noticia::find($id);
        $noticia->delete();
        return redirect('/noticias');
    }
}
