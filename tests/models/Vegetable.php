<?php

namespace noname9\Translatable\Test\Model;

use noname9\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Vegetable extends Eloquent
{
    use Translatable;

    protected $primaryKey = 'identity';

    protected $translationForeignKey = 'vegetable_identity';

    public $translatedAttributes = ['name'];
}
