<?php

namespace noname9\Translatable\Test\Model;

use noname9\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class CountryGuarded extends Eloquent
{
    use Translatable;

    public $table = 'countries';
    protected $fillable = [];
    protected $guarded = ['*'];

    public $translatedAttributes = ['name'];

    public $translationModel = 'noname9\Translatable\Test\Model\CountryTranslation';
    public $translationForeignKey = 'country_id';
}
