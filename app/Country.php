<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The id of the country.
     * @var int
     */
    public $id;

    /**
     * The name of the country.
     * @var string
     */
    public $name;

    /**
     * The uri of the country.
     * @var string
     */
    public $uri;

    public function __construct(array $countryData)
    {
        $this->id = $countryData['woeid'];

        $this->name = $countryData['name'];

        $this->uri = $countryData['uri'];
    }
}