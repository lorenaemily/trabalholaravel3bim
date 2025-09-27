@extends("layout.app")

@section("content")

<h1>crud com laravel 10 show</h1>
<hr>

<p>Nome: {{$user->name}}</p>
<p>Email: {{$user->email}}</p> | 
<form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Tem certeza que deseja deletar este usuário?')">Deletar</button>
<br>
@endsection