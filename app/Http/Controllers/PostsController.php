<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mod_Post;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "index";
        //$posts =  Mod_Post::all();
        //$posts =  Mod_Post::orderBy('title', 'desc')->get();
        $posts =  DB::select("Select * from mod__posts");
        //$posts = $posts->toArray();
        //echo"<pre/>";print_r($posts); exit;
        return view('posts.index')->with('posts', $posts);
        //return view('posts.index')->with(array ( 'posts' => $posts ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'title'=>['required', 'min:10'], //can also be decalred as required|unique:posts|max:255
            'body'=> 'required'
        ]);

        return 123;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //echo "Show method was invoked!";
        $post =  Mod_Post::find($id); //finds all entries with this id
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
