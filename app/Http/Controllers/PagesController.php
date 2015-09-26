<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Home Page';
        $lessons = ['First Lesson','Second Lesson','Third Lesson'];
//        return view('pages.home',  ['lessons'=>$lessons]);
//        return view('pages.home', compact('lessons'));
//        return view('pages.home')->with('lessons',$lessons);
//        return view('pages.home')->withLessons('lessons')
//                                 ->withTitle('title');
        return view('pages.home',  compact('lessons','title'));
    }
    
    public function about() 
    {
        $title = 'About Page';
        return view('pages.about',  compact('title'));
    }
}
