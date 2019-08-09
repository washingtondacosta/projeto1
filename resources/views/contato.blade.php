@extends('layouts.app')
@section('title','Adicionar um Produto')
@section('content')
     <h1 class="mb-3">Contato</h1>
     @if($message = Session::get('success'))
     <div class="alert alert-success">
     	{{$message}}
     </div>
     @endif
     @if(count($errors)>0)
     <div class="alert alert-danger">
     	<ul>
     		@foreach($errors->all() as $error)
     		<li>{{$error}}</li>
     		@endforeach
     	</ul>
     </div>
     @endif
	<form method="POST" action="{{url('contato/enviar')}}">
		@csrf
		<div class="form-group mb-3">
		    <label for="Nome">Nome</label>
		    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="Email">Email</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Digite o seu e-mail" required>
	 	</div>
		<div class="form-group mb-3">
		    <label for="Assunto">Assunto</label>
		    <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Digite o Assunto..." required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="titulo">Mensagem</label>
		    <textarea class="form-control" id="mensagem" name="mensagem" rows="6" placeholder="Digite a sua mensagem..." required></textarea>
	 	</div>
	 	<button type="submit" class="btn btn-primary">Enviar Mensagem</button>
	</form>
   
@endsection