<?php

namespace noname9\Translatable\Test\Model;

use noname9\Translatable\Translatable;

class CountryWithCustomTranslationModel extends Country
{
    use Translatable;

    public $table = 'countries';
    public $translationForeignKey = 'country_id';
    public $translationModel = 'noname9\Translatable\Test\Model\CountryTranslation';
}
