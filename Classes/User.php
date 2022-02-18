<?php
class User
{
    public $id;
    public $username;
    public $firstname;
    public $lastname;
    public $birthday;
    public $email;
    public $profilepicture;
    public $role;


    public function __construct()
    {
        settype($this->id, 'integer');
    }
}