@extends('layouts.master')
@section('titulo','Bem vindo !')
@section('conteudo')


<div class="container mtb">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Hospede</th>
      <th scope="col">Idade</th>
      <th scope="col">Rg</th>
      <th scope="col">Telefone</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  @foreach($hospedes as $a)
  <tbody>
    <tr>
      <td>{{$a->nome}}</td>
      <td>{{$a->idade}}</td>
      <td>{{$a->rg}}</td>
      <td>{{$a->telefone}}</td>
      <td>{{$a->statusHospede}}</td>
    </tr>
  </tbody>
  @endforeach
</table>
<a href="/Hospede" class="btn btn-theme">HOSPEDES</a>
<br><br>
<h2>STATUS POSSÍVEIS</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Status</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  @foreach($status as $a)
  <tbody>
    <tr>
      <td>{{$a->id}}</td>
      <td>{{$a->status}}</td>
      
      <td>
      <a href="statusHospede/{{$a->id}}/edit" class="btn btn-theme">Editar</a>
    </tr>
  </tbody>
  @endforeach
</table>
<br>
<a href="statusHospede/create" class="btn btn-theme">Novo Status</a>
</div>

@endsection