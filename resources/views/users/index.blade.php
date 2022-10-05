

@extends('layouts.app')

    @section('title', 'Listagem dos Usuarios')

            @section('content')

            <h1  >LISTAGEM DOS USUARIOS
            ( <a href="{{route('users.create')}}">Cadastrar Usuario</a>)
            </h1>

            <form action="{{route('users.index')}}" method="get">
                <input type="text" name="search" placeholder="Pesquisar">
                <button>Pesquisar</button>
            </form>

            <ul>

            @foreach ($users as $user)
            <li>
                @if ($user->image)
                <img style="width:100px; height:100px " src="{{url("storage/{$user->image}")}}" alt="{{$user->name}}">
                @else
                <img src="{{url("images/favicon.ico")}}" alt="{{$user->name}}">
                @endif
                    {{$user->name}} - {{$user->email}}
                    | <a href="{{route('users.edit', $user->id)}}">Editar</a>
                    | <a href="{{route('users.show', $user->id)}}">Detalhes</a>
                    | <a href="{{route('comments.index', $user->id)}}">Anotações({{$user->comments->count()}})</a>
            </li>
            @endforeach


        </ul>

        <div>{{$users->appends([
            'search' => request()->get('search','')
        ])->links()}}
        </div>
@endsection
