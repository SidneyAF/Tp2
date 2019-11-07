@extends('master')
@section('titulo','Reserva')
@section('conteudo')
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
    <br>
    <h2>Preço total:</h2> 
  </dl>
  <input type="submit" value="Reservar" >
  </form>
@endsection