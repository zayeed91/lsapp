<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mod_Post extends Model
{
    //Table name
    protected $table = 'mod__posts';

    //Primary key
    public $primaryKey = 'id';

    //Timestamps you dont have to declare is by default
    public $timestamps = 'created_at';
}
