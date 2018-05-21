<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
    	//return "Index Page!";
    	$title = "Welcome to Laravel 5";

    	//return view('pages.index', compact('title'));
    	return view('pages.index') -> with('title', $title);
    }

    public function about(){
		$h1 = 'About header!';
    	return view('pages.about') -> with('h1', $h1);
    }

    public function services(){
    	$data = array(
			'title' => 'Services',
			'text' => ['PHP', 'Java', 'C++']
    	);
    	return view('pages.services') -> with($data);
    }
}


