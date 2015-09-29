@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-3">
            <h1>{{$flyer->street}}</h1>
            <h2>{!! $flyer->price!!}</h2>

            <hr>

            <div class="description">{!! nl2br($flyer->description) !!}</div>
        </div>
        <div class="col-md-9">
            @foreach ($flyer->photos as $photo)

                <img src="/{{$photo->thumbnail_path}}" alt="">
            @endforeach


        </div>
    </div>
    <hr>
    <h2>Add Your Photos</h2>

    <form id="addPhotosForm"
          action="/{{$flyer->zip}}/{{$flyer->street}}/photos"
          {{--action="{{ route('store_photo_path'), [$flyer->zip, $flyer->street] }}"--}}
          method="POST"
          class="dropzone">
        {{csrf_field()}}
    </form>
@stop

@section('scripts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
    <script>
        Dropzoe.options.addPhotosForm = {
            paramName: 'file',
            acceptedFiles: '.jpg, .jpeg, .png, .bmp'
        }
    </script>

@stop