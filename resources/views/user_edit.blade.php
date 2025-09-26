@extends("layout.app")

@section("content")

<h1>crud com laravel 10 edit</h1>

<form action="{{ route('users.update', ['user' => $user->id]) }}" method="post" >
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{$user->name}}">
    <input type="email" name="email" value="{{$user->email}}">
    <button type="submit">Enviar</button>

</form>
@endsection