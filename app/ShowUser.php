<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShowUser extends Model
{
    protected $table ='student';
    protected $fillabel =['ID','name','f_name'];
}
