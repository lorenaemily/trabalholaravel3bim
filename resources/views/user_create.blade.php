@extends("layout.app")

@section("content")

<h1>crud com laravel 10 create</h1>

<form action="{{ route('users.store') }}" method="post" >
    @csrf
    <input type="text" name="name" value="" placeholder="your name">
    <input type="email" name="email" value="" placeholder="your email">
    <input type="password" name="password" value="" placeholder="your password">
    <button type="submit">Create</button>

</form>
@endsection