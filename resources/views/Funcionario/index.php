<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
</head>
<body>
  @yield('conteudo')
</body>
</html>

Criar uma pasta NomeDaModel dentro da pasta de view;
Criar view index.blade

Codificar index view:
@extends('master')
@section('titulo','ESCREVA SEU TITULO')
@section('conteudo')
  <h3><a href="/NOMEDAMODEL/create">Novo Aluno</a></h3>
  @foreach ($alunos as $a)
  <p>{{$a->nome}} - {{$a->endereco}} - CONTINUE COLOCANDO CONFORME AS VARIAVEIS SOLICITADAS PELO PROF
  	<a href="aluno/{{$a->id}}/edit">Editar</a> -
    <form action="aluno/{{ $a->id }}" method="POST">
            @csrf
            @method("DELETE")
            <button>Deletar aluno</button>
    </form>
  </p>
  @endforeach
@endsection