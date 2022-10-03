

@extends('layouts.app')

@section('title', "EDITAR O COMENTÁRIO ")

        @section('content')

        <h1>EDITAR USUARIO O COMENTÁRIO DO USUÁRIO {{$user->name}}</h1>

        @include('includes.validations-form')


        <form action="{{route('comments.update', $comment->id)}}" method="post">
           @method('PUT')
          @include('users.comments._partials.form')
        </form>



       @endsection
