<?php


class Openingstijden
{
    public $id;
    public $dag;
    public $openingsTijd;
    public $sluitingsTijd;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}
