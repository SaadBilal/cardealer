<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $fillable = ['make', 'model', 'year', 'description', 'hp', 'mpg', 'msrp', 'offer'];
    public $table = 'cars';
}
