<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Song extends Eloquent {

    public $timestamps = false;
// Fillable field for a song
protected $fillable = [
'TitleSong','LyricsSong', 'Slug'
];

}