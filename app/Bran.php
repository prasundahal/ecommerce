<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bran extends Model
{
    protected $table = 'bran';
    protected $fillable = ['type', 'image', 'link'];
    public $timestamps = false;
}
