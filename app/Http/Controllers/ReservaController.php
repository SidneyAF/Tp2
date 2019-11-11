<?php

namespace App\Http\Controllers;

use App\Reserva;
use App\Quarto;
use App\Pacote;
use App\Hospede;
use App\Http\Requests\ReservaRequest;
use App\ReservaQuarto;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Request $request)
    {
        $this->middleware('auth', ['except' => ['index']]);
    }


    public function index()
    {
        $reservas = Reserva::all();
        $quartos = Quarto::all();

        for ($i=0; $i < sizeof($quartos); $i++) {
            //$quartos = Quarto::where('id','=',$reservas[$i]->quarto_id)->first();
            if($quartos[$i]->statusDisponibilidade == 0){
                $quartos[$i]->statusDisponibilidade = "Disponível";
            }else{
                $quartos[$i]->statusDisponibilidade = "Reservado";
            };
        }
        return view('Reserva.index')->with('quartos', $quartos);
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


    public function store(ReservaRequest $request)
    {   
        
        Hospede::create(['nome'=>$request->nome, 'idade'=>$request->idade, 'rg'=>$request->rg, 'telefone'=>$request->telefone]);
        
        $precoQuarto = Quarto::where('id','=',$request->quartos)->first();
        $precoQuarto = $precoQuarto->preco;

        $precoPacote = Pacote::where('id','=',$request->pacotes)->first();
        $precoPacote = $precoPacote->custoAdicional;

        $checkin = date_create($request->checkin);
        $checkout = date_create($request->checkout);

        $quatidadeDias = date_diff($checkin, $checkout);
        $quatidadeDias = date_interval_format($quatidadeDias ,'%a');
        $precoTotal = ($precoQuarto + $precoPacote) * $quatidadeDias;

        Reserva::create(['checkin'=>$request->checkin,'checkout'=>$request->checkout,'status'=>'Reservado','precoTotal'=>$precoTotal,'funcionario_id'=>'1','quarto_id'=>$request->quartos,'quantidadePessoas'=>$request->qtdPessoas,'pacote_id'=>$request->pacotes]);

        $reservaId = Reserva::all();
        $reservaId = $reservaId[sizeof($reservaId)-1]->id;

        ReservaQuarto::create(['reserva_id'=>$reservaId,'quarto_id'=>$request->quartos]);

        $statusQuarto = Quarto::find($request->quartos);

        $statusQuarto->statusDisponibilidade = 1;

        $statusQuarto->save();
        
        echo "<script>alert('Reserva efetuada ! Preço total:$precoTotal');</script>";
        echo "<script>window.location.href='/Reserva'</script>";
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
