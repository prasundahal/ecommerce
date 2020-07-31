<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    protected $table = "wishlist";
    public $fillable = ['uniqueid', 'title', 'product', 'quantity','size', 'cost'];
    public $timestamps = false;
    
  public function product()
{
    return $this->belongsTo('App\Product','id');
}
  
}
