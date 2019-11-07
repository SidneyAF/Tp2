<?php

namespace App\Http\Controllers;

use App\Reserva;
use App\Quarto;
use App\Pacote;
use App\Hospede;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::all();
        return view('Reserva.index')->with('reservas', $reservas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $quartos = Quarto::all();
        $pacotes = Pacote::all();
        return view('Reserva.create')->with('quartos', $quartos)->with('pacotes', $pacotes);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        Hospede::create(['nome'=>$request->nome, 'idade'=>$request->idade, 'rg'=>$request->rg, 'telefone'=>$request->telefone]);
        //$hospede = Hospede::where('nome','=',$request->nome )->first();
        $preco = "500";
        Reserva::create(['checkin'=>$request->checkin,'checkout'=>$request->checkout,'status'=>'Reservado','precoTotal'=>$t,'funcionario_id'=>'1','quarto_id'=>$request->quartos,'quantidadePessoas'=>$request->qtdPessoas,'pacote_id'=>$request->pacotes]);
       // return redirect('Reserva');
    }


    
    /**
     * Display the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        return view('reserva.edit')->with('reserva',$reserva);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        $reserva->update($request->all());
        return redirect('reserva'); 
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
