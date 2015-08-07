
@extends('master')

@section('content')
    <h1>View Songs - Justin Bieber Official Album</h1>
   <h2>{{ $song->TitleSong }}</h2>

    @if($song->LyricsSong)
        <article>{{ nl2br($song->LyricsSong )}}</article>
        {!! link_to_route('songs_path','Back Home' ) !!}
        {!! link_to_route('editSong_path','Editar', [$song->Slug] ) !!}
    @endif


@stop