<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {

    $lessons =['My Fist Lesson','My Second Lesson', 'My Third Lesson'];
    $name = '<em>Henry Arévalo</em>';

    return view('pages.home', compact('lessons','name'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
