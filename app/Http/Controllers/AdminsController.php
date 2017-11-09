<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{

	public function index()
    {
    	$user = Auth::user();
        return ( $user['admin'] )?
        			view ("dashboard");
    }
	public function charts()
    {
    	$user = Auth::user();
        return ( $user['admin'] )?
        			view ("charts"):view ("/");
    }
	

    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
	        'title' => 'required|unique:posts|max:255',
	        'body' => 'required',
	    ]);

    // The blog post is valid...
    }
}
