

@extends('layouts.app')

@section('title', "EDITAR USUARIO {{$user->name}}")

        @section('content')

        <h1>EDITAR USUARIO {{$user->name}}</h1>

        @include('includes.validations-form')


        <form action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
           @method('PUT')
          @include('users._partials.form')
        </form>



       @endsection
