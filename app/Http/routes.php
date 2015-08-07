<?php

Route::bind('songs', function($slug){
    return App\Song::where('slug',$slug)->first();
});



//Route::get('/','PagesController@index');
//Route::get('/',function(){  $users = DB::table('songs')->get(); return $users;});
//Route::get('about','PagesController@about');

//Route::get('songs', 'SongsController@index');
//get('songs/{slug}','SongsController@show');  //captura el id y lo envia al metodo como parametro
//get('songs/{slug}/edit','SongsController@edit' );



//$router->resource('songs','SongsController',[
 //   'only'=>['index','show','edit','update', '/' ]
//]);

//$router->resource('people','PeopleController');

$router->get('songs', ['as'=>'songs_path', 'uses'=>'SongsController@index']);
$router->post('songs/store', ['as'=>'storeSong_path', 'uses'=>'SongsController@store']);
$router->get('songs/create', ['as'=>'createSong_path', 'uses'=>'SongsController@create']);
$router->delete('songs/{songs}', ['as'=>'deleteSong_path', 'uses'=>'SongsController@destroy']);
$router->get('songs/{songs}', ['as'=>'song_path', 'uses'=>'SongsController@show']);
$router->get('songs/{songs}/edit', ['as'=>'editSong_path', 'uses'=>'SongsController@edit']);
$router->patch('songs/{songs}', ['as'=>'update_path', 'uses'=>'SongsController@update']);




/*
Route::get('/', function()
{
    return "Home Page";
});

