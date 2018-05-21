<?php //app.blade.php ?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href={{asset('css/app.css')}}>
        <!--title>Laravel</title-->
        <title>{{config('app.name', 'LSAPP')}}</title>

    </head>
    <body>
        @include('include.navbar')
        <div class = 'container'>
            @include('include.messages')
    	    @yield('content')
            <?php //var_dump($errors) ?>
        </div>
    </body>
</html