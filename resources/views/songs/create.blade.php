
@extends('master')

@section('content')
    <h1>Add New Song</h1>


    {!! Form::open(['route' =>'storeSong_path']) !!}
    @include('songs._form')
    <div class="form-group">
        {!! Form::submit('Create Song', ['class'=> 'btn btn-primary']) !!}
    </div>
    {!!Form::close()   !!}

@stop