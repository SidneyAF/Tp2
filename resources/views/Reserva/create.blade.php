@extends('layouts.master')
@section('titulo','Reserva')
@section('conteudo')
  
<div class="container mtb">
  <div class="row">
      <div class="col-lg-8">
        <h4>RESERVE SUA HOSPEDAGEM</h4>
        <div class="hline"></div>
        <p>Reserve hotéis pela metade do preço. Ganhe diárias grátis onde quiser! Ofertas exclusivas. Avaliações dos hóspedes. Ganhe recompensas. Hotéis de luxo. Fotos e avaliações.</p>

<div class="row">
  <form method="POST" action="/Reserva">
  @csrf
  <dl>
    <div>
      <dt>Nome do hospede</dt>
      <dd><input type="text" name="nome"></dd>
      <dt>Idade</dt>
      <dd><input type="text" name="idade"></dd>
      <dt>RG</dt>
      <dd><input type="text" name="rg"></dd>
      <dt>Telefone</dt>
      <dd><input type="text" name="telefone"></dd>
    </div>
    <hr>
    <div>
      <dt>Quarto</dt>
      <dd>
          <select name="quartos">
          @foreach($quartos as $a)
            <option value= "{{$a->id}}" >{{$a->categoria}} - R$ {{$a->preco}}</option>
          @endforeach
          </select> 
      </dd>
      <dt>Pacote</dt>
      <dd>
          <select name="pacotes">
          @foreach($pacotes as $a)
            <option value="{{$a->id}}">{{$a->refeicoes}} - {{$a->eventos}} -R$ {{$a->custoAdicional}}</option>
          @endforeach
          </select> 
      </dd>
      <dt>Quantidade de pessoas</dt>
      <dd><input type="number" name="qtdPessoas"></dd>
      <dt>Data de entrada</dt>
      <dd><input type="date" name="checkin"></dd>
      <dt>Data de saída</dt>
      <dd><input type="date" name="checkout"></dd>
    </div>
  </dl>
  <input class="btn btn-primary" type="submit" value="Reservar" >
  </div>
  </div>
  </div>
</div>
@endsection

