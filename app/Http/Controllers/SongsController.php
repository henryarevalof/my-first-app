<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Song;

class SongsController extends Controller
{
    public function index(Song $song)
    {
        $songs = $song->get();
        return view('songs.index', compact('songs'));
    }

    public function create(){

        return view('songs.create');
    }
    public function show(Song $song)
    {
       // $song = Song::whereSlug($slug)->first();
        return view('songs.show', compact('song'));
    }

    public function edit(Song $song)
    {
       return view('songs.edit', compact('song'));
    }

//public function store(Request $request, Song $song, )
    public function store(Requests\CreateSongRequest     $request, Song $song )
    {
    $input = $request->all();
    $song->create($input); // $song->create($request->all->());

    return redirect()->route('songs_path');
    }

    public function destroy(Song $song){

      $song->delete();
        return redirect()->route('songs_path');
    }


    public function update(Song $song, Request $request)
    {
       // $song->TitleSong = $request->get('TitleSong');
       // $song->save();
      // $song->fill(['TitleSong'=>$request->get('TitleSong')])->save();

        $song->fill($request->input())->save();
        return redirect()->route('songs_path');

    }
}
