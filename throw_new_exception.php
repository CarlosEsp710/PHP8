<?php

// function user($role)
// {
//     if (!$role) {
//         throw new Exception('Asigne un rol de usuario');
//     }
//     return $role;
// }

// function user($role)
// {
//     return $role ?? throw new Exception('Asigne un rol de usuario');
// }

// echo user('admin');

$user = false;

if ($user || throw new Exception('$user debe ser verdadero')) {
    echo '$user es verdadero';
}
