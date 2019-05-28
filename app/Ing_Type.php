<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ing_Type extends Model
{
    public function ingredients()
    {
        return $this->hasMany('App\Ingredient');
    }
}
