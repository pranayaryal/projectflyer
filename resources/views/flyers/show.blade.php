@extends('layout')

@section('content')

    <h1>{{$flyer->street}}</h1>
    <h2>{!! $flyer->price!!}</h2>

    <hr>

    <div class="description">{!! nl2br($flyer->description) !!}</div>

    <form action="/{{$flyer->zip}}/{{$flyer->street}}/photos" method="POST" class="dropzone">
        {{csrf_field()}}
    </form>
@stop

@section('scripts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>

@stop