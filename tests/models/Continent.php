<?php

namespace noname9\Translatable\Test\Model;

use noname9\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * A test class that has no required properties.
 */
class Continent extends Eloquent
{
    use Translatable;

    public $translatedAttributes = ['name'];
}
