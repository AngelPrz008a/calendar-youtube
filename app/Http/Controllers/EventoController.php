<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Http\Requests\storeEvento;
use App\Http\Requests\evento as RequestsEvento;
use Carbon\Carbon;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('evento.index');
    }


    public function store(storeEvento $request)
    {
        Evento::create($request->all());
    }


    public function show($evento)
    {
        $evento = Evento::all();
        return $evento;
    }

//
    public function edit($evento)
    {
        $evento = Evento::find($evento);

        $evento->start= date_create($evento->start);
        $evento->start =  date_format($evento->start,'Y-m-d h:m:s');

        $evento->end= date_create($evento->end);
        $evento->end =  date_format($evento->end,'Y-m-d h:m:s');

        return $evento;
    }
//

//
    public function update(Request $request,$evento)
    {
        $evento = Evento::find($evento);
        $evento -> update($request->all());
        return $evento;
    }
//
//
    public function destroy($evento)
    {
        $evento = Evento::find($evento)->delete();
        return $evento;
    }
//
}
