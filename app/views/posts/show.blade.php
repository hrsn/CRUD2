@extends('layout')

@section('content')
<a href="{{ URL::to('/posts/') }}">Volver a la lista</a>
<br />
<a href="{{ $post->id }}/edit">Editar Recurso</a>

{{ Form::open(array('url' => 'posts/' . $post->id, 'method' => 'delete')) }}
<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
{{ Form::submit('Eliminar') }}
{{ Form::close() }}

@stop