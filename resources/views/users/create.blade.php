

@extends('layouts.app')

@section('title', 'Novo Usuario')

        @section('content')

        <h1>NOVO USUARIO</h1>

        @include('includes.validations-form')


        <form action="{{route('users.store')}}" method="post">
           @csrf
           @include('users._partials.form')
        </form>



       @endsection
