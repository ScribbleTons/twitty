<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tweety;


class TweetyController extends Controller
{


     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('tweets.index',[
            'tweets'=> auth()->user()->timeline(),
        ]);
    }

    public function store(){

        $attributes = request()->validate(['body'=>'required|max:255']);

        tweety::create([
            'user_id' =>auth()->id(),
            'body' => $attributes['body']
        ]);

        return redirect('/tweets');
    }
}
