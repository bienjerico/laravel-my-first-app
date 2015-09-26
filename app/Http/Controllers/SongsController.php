<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Song;


class SongsController extends Controller
{

    private $song;

    public function __construct(Song $song){
        $this->song = $song;
    }

    public function index(){
        
        $songs = $this->song->get();

        return view('songs.index',  compact('songs'));
        
    }
    
    public function show(Song $song){
        
//        $song = $this->song->where('slug',$slug)->first();

        return view('songs.show',  compact('song'));
        
    }

    public function edit(Song $song){
        
//        $song = $this->song->where('slug',$slug)->first();

        return view('songs.edit',  compact('song'));
        
    }

    public function update(Song $song, Request $request){
        
//        $song = $this->song->where('slug',$slug)->first();
        
//        $song->title = $request->get('title');
//        $song->save();

        $song->fill($request->input())->save();
        
        return redirect('songs');
        
    }
}
