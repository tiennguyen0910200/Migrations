<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    function getDisplayPrice(){
    	$formatedPrice = number_format($this->price,0,',','.');
    	return $formatedPrice . "VND";
    }
}
