<?php 

if(count($errors) > 0){
    foreach($errors ->all() as $error){ //$errors is an object ?>
        <div class ='alert alert-danger'>
            {{ $error}}
        </div> <?php
    }
}

if(session('sucesss')){ ?>
    <div classs = 'alert alert-success'>
        {{session('success')}}
    </div> <?php

}

if(session('error')){ ?>
    <div classs = 'alert alert-danger'>
        {{session('error')}}
    </div> <?php

}
?>