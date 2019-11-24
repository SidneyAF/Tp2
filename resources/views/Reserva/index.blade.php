@extends('master')
@section('titulo','Bem vindo !')
@section('conteudo')
  @foreach($reservas as $a)
  {{$a}}
  @endforeach
  <h3><a href="/Reserva/create">Fazer reserva</a></h3>
@endsection