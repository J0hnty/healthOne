<?php


class Review
{
    public $id;
    public $name; //email
    public $title;
    public $description;
    public $date;
    public $rating;
    public $product_id;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->product_id, 'integer');
    }
}
