<!--index.blade.php -->
@extends('layouts.app')

@section('content')
<div class = 'jumbotron text-center'>
		<h1>{{$title}}</h1>

		<p><?php echo 'Title is '.$title ?></p>
    	<!--h1>This is the index page routed from web.php to PagesController at method index()</h1-->
    	<p>This is a test page!</p>
		<p>
			<a class='btn btn-primary btn-lg' href='/login' role='button'>Login</a>
			<a class='btn btn-success btn-lg' href='/register' role='button'>Reister</a>
		</p>
</div>

@endsection