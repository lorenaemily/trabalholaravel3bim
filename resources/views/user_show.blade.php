@extends("layout.app")

@section("content")

<h1>crud com laravel 10 show</h1>
<hr>

<p>Nome: {{$user->name}}</p>
<p>Email: {{$user->email}}</p>

@endsection