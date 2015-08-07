@extends('master')

@section('content')
<h2> Justin Bieber Official Fan Club</h2>
    @foreach($songs as  $song)
           <li> {!! link_to_route('song_path',$song->TitleSong, [$song->Slug] ) !!} </li>
            <!--  <li><a href="{{ route('song_path', [$song->Slug]) }}"> {{ $song->TitleSong }} </a>  </li> -->
    @endforeach
    {!! link_to_route('createSong_path','Create New Song') !!}
@stop