<?php

namespace App\Http\Controllers;

use App\statusHospede;
use App\Hospede;
use Illuminate\Http\Request;

class StatusHospedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $hospedes = Hospede::all();
        $status = statusHospede::all();
        return view('Hospede.index')->with('hospedes', $hospedes)->with('status', $status);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('Hospede.create');
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {   
        
        statusHospede::create($request->all());
        return redirect('statusHospede'); 
    }


    
    /**
     * Display the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $statusHospede= statusHospede::find($id);
        return view('Hospede.edit')->with('statusHospede',$statusHospede);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $statusHospede= statusHospede::find($id);
        $statusHospede->update($request->all());
        return redirect('statusHospede'); 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(reserva $reserva)
    {
        $reserva->delete();
        return redirect('reserva');
    }
}
