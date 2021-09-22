<?php

namespace noname9\Translatable\Test\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class CountryTranslation extends Eloquent
{
    public $timestamps = false;

    protected $fillable = ['name'];
}
