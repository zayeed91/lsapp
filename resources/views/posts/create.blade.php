@extends('layouts.app')

@section('content')

<h1>Create Post!</h1>
<small>Contents will be added here!</small>

{!! Form::open(['action' => 'PostsController@store', 'method' => 'post']) !!}

    <div class = 'form-group'>
        <?php echo Form::label('title', 'Title'); ?>
        <?php echo Form::text('title','Title 1', ['class' => 'form-control', 'placeholder' => 'Title']); ?>
    </div>
    <div class = 'form-group'>
        <?php echo Form::label('body', 'Body'); ?>
        <?php echo Form::textarea('body','Body Text..', ['class' => 'form-control', 'placeholder' => '']); ?>
    </div>
    {{Form::submit('submit', ['class' => 'btn btn-primary btn'])}}
{!! Form::close() !!}

@endsection