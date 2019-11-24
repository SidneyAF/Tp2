@extends('layouts.master')
@section('titulo','Bem vindo !')
@section('conteudo')


<div class="container mtb">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Quarto</th>
      <th scope="col">Preço</th>
      <th scope="col">Disponibilidade</th>
    </tr>
  </thead>
  @foreach($quartos as $a)
  <tbody>
    <tr>
      <td>{{$a->categoria}}</td>
      <td>{{$a->preco}}</td>
      <td>{{$a->statusDisponibilidade}}</td>
    </tr>
  </tbody>
  @endforeach
</table>
<br>

<a href="/Reserva/create" class="btn btn-theme">NOVA RESERVA</a>
</div>

@endsection