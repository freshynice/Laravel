<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	
	/** Return view to upload file */
    public function uploadFile(){
        return view('uploadfile');
    }
	
	/** Return view to content page */
    public function content(){
        return view('content');
    }
}
