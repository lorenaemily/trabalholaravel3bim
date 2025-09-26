@extends("layout.app")

@section("content")

<h1>crud com laravel 10</h1>

<a href="{{ route('users.create') }}">Create</a>

<hr>

@if (session()->has("message"))
    <div>{{session()->get("message")}}</div>
@endif
<ul>
    @foreach($users as $user)
        <li>{{ $user->name }}</li> | <a href="{{route ('users.edit',['user' => $user->id])}}">Edit</a> | <a href="">delete</a>
    @endforeach
</ul>




@endsection