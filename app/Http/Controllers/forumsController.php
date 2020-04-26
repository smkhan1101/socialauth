<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\discussion;
use App\User;

class forumsController extends Controller
{
    public function index(){

    	$discussion = discussion::orderBy('created_at' , 'desc')->paginate(3);
    	return view('fourm', ['discussions' => $discussion]);
    }
}
