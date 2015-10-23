@extends('layout')

@section('content')
    <div class="jumbotron">
        <h1>Project Flyer</h1>
        <p>
            This a jumbotron taken from bootstrap
        </p>

        @if (Auth::check())

            <a href="/flyers/create" class="btn btn-primary">Create A Flyer</a>
        @else

            <a href="/auth/register" class="btn btn-primary">Sign Up</a>
        @endif


    </div>


@stop