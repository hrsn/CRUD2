@extends('layout')

@section('content')
<h2>Lista de Recursos</h2>
<a href="posts/create">Agregar Recurso</a>
<ul>
	@foreach($posts as $post)
	<li><a href="posts/{{ $post->id }}"> {{ $post->title }}</a></li>
	@endforeach
</ul>

@stop