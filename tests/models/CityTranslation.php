<?php

namespace noname9\Translatable\Test\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class CityTranslation extends Eloquent
{
    public $timestamps = false;
    public $fillable = ['name'];
}
