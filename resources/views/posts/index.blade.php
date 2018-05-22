@extends('layouts.app')

@section('content')
    <h1>Posts index Page!</h1>

    <?php 
        if(count($posts) > 0 ){
            foreach($posts as $post){
                //echo"<pre/>";print_r($post);die();
                echo "<div class = 'wells'>";
                    echo "<h3><a href=/posts/".$post->id." target = _blank >".$post->id." ".$post->title."</a></h3>"; // also can be written as {{$posts -> title}} ?>
                    <small>Written on: {{$post->created_at}}</small>
            <?php    echo "</div>";
            }
        }
        else{
            echo 'no posts found!';
        }
            //echo count($posts);
    ?>

@endsection