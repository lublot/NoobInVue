<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['name','date','status','createdAt','description'];
}
