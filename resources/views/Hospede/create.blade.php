@extends('layouts.master')
@section('titulo','Reserva')
@section('conteudo')
  
<div class="container mtb">
  <div class="row">
      <div class="col-lg-8">
        <h4>NOVO STATUS</h4>
<div class="row">
  <form method="POST" action="/statusHospede">
  @csrf
  <br><br>
  <dl>
      <dt>Nome do status</dt>
      <dd><input type="text" name="status"></dd>
  </dl>
  <input class="btn btn-primary" type="submit" value="Cadastrar" >
  </div>
  </div>
  </div>
</div>
@endsection

