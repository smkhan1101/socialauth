<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\discussion;
use Auth;
use Session;

class DiscussionController extends Controller
{
    public function create(){

    	return view('discuss');
    }

   public function store(Request $request)

    {

        



        $this->validate($request, [

            'channel_id' => 'required',

            'content' => 'required',

            'title' => 'required',

        ]);



        $discussion =discussion::create([

            'title' => $request->title,

            'content' => $request->content,

            'channel_id' => $request->channel_id,

            'user_id' => Auth::id()

         

        ]); 



        Session::flash('success', 'Discussion succesfully created.');



        return redirect()->Back();

    }


}
