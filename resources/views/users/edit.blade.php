

@extends('layouts.app')

@section('title', "EDITAR USUARIO {{$user->name}}")

        @section('content')

        <h1>EDITAR USUARIO {{$user->name}}</h1>

        @if ($errors->any())
            <ul class="errors">
                @foreach ($errors->all() as $error)
                <li class="error">{{$error}}</li>

                @endforeach

            </ul>

        @endif


        <form action="{{route('users.update', $user->id)}}" method="post">
           @method('PUT')
           @csrf
                <input type="text" name="name" placeholder="Nome:" value="{{$user->name}}">
                <input type="email" name="email" placeholder="E-mail:" value="{{$user->email}}">
                <input type="password" name="password" placeholder="Senha:" value="{{old('password')}}">
                <button type="submit">Enviar</button>
        </form>



       @endsection
