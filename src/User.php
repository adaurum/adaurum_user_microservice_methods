<?php

namespace Microservices;

class User
{

    public $id;
    public $first_name;
    public $last_name;
    public $email;

    public function __construct($json)
    {
        $this->id = $json['id'];        
        $this->first_name = $json['first_name'];        
        $this->last_name = $json['last_name'];        
        $this->email = $json['email'];        
    }

}
