
@extends('master')

@section('content')
    <h1>Edit Songs - Justin Bieber Official Album</h1>
     {{ $song->TitleSong }}

{!!Form::model($song, ['route'=>['update_path',$song->Slug] ,'method'=>'PATCH']) !!}
    @include('songs._form')
    <div class="form-group">
        {!! Form::submit('Update Song', ['class'=> 'btn btn-primary']) !!}
    </div>

{!!Form::close()   !!}

<!--    {!! Form::open(['method'=>'delete', 'route'=> ['deleteSong_path',$song->Slug]])!!} -->
    <div class="form-group">



<!--    {!!  Form::submit('Delete Song', ['class'=>'btn btn-danger']) !!} -->

    </div>
<!--    {!! Form::close()!!} -->
    {!! delete_form(['deleteSong_path',$song->Slug], 'Delete - '. $song->Slug)  !!}
@stop