<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mod_Post extends Model
{
    //Table name
    protected $table = 'mod__posts';

    //Primary key
    public $primaryKey = 'id';

    //Timestamps you dont have to declare is by default
    public $timestamps = 'created_at';


    public function get_all_posts(){
        $posts = DB::select("select * from mod__posts");
        return $posts;
    }
}
