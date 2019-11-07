@extends('master')
@section('titulo','ESCREVA SEU TITULO')
@section('conteudo')
  <form method="post" action="/NOMEDAMODEL">
  @csrf
  <dl>
  	<dt>Nome</dt>
  	<dd><input type="text" name="nome"></dd>
  	<dt>Endereco</dt>
  	<dd><input type="text" name="endereco"></dd>

	CONTINUE COLOCANDO CONFORME AS VARIAVEIS SOLICITADAS PELO PROF
  </dl>
  <input type="submit" value="Enviar">
  </form>
@endsection