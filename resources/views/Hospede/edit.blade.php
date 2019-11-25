@extends('layouts.master')
@section('titulo','Reserva')
@section('conteudo')


<form method="post" action="statusHospede/{{$statusHospede->id}}">
  @csrf
  @method("put")
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" value="{{$statusHospede->status}}" name="status"></dd>
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection

