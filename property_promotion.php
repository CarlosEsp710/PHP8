<?php

// class User
// {
//     public $name;
//     public $lastName;

//     public function __construct(string $name, string $lastName)
//     {
//         $this->name = $name;
//         $this->lastName = $lastName;
//     }
// }


// $user = new User('Carlos', 'Espejel');

// var_dump($user);

class User
{
    public function __construct(
        public string $name,
        public string $lastName
        )
    {
    }
}


$user = new User('Carlos', 'Espejel');

var_dump($user);
