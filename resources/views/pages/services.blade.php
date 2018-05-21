@extends('layouts.app')

@section('content')
    	<h1><?php echo $title ?></h1>
		<h3><?php echo 'Services are: '; ?></h3>
		<?php 
			if(count($text) > 0){
				echo "<ul class ='list-group' >";
				//foreach($text as $key => $value){ //either will work
				foreach($text as $value){
					echo "<li class = 'list-group-item'>".$value."</li>";
				}
				echo '</ul>';
			}
		?>
    	<p>This is the services page!</p>

@endsection