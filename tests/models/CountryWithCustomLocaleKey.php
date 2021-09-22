<?php

namespace noname9\Translatable\Test\Model;

use noname9\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class CountryWithCustomLocaleKey extends Eloquent
{
    use Translatable;

    public $table = 'countries';
    public $translatedAttributes = ['name'];

    /*
     * You can customize per model, which attribute will
     * be used to save the locale info into the database
     */
    public $localeKey = 'language_id';
}
