<?php

class User
{
    public function greet(string|array|null $message)
    {
        var_dump($message);
    }
}

$user = new User;
$user->greet(null);