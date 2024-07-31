<?php

namespace Microservices;

class User
{
    public $id;
    public $name;
    public $last_name;
    public $email;
    public $role;

    public function __construct($json)
    {
        $this->id = $json['id'];        
        $this->name = $json['name'];        
        $this->last_name = $json['last_name'];        
        $this->email = $json['email'];        
        $this->role = $json['role'];  
    }
}
