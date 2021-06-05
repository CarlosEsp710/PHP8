<?php

$login = 'google';

// switch ($login) {
//     case 'github':
//         $client = 'github_client_secret';
//         break;
//     case 'facebook':
//         $client = 'facebook_client_secret';
//         break;
//     case 'google':
//         $client = 'google_client_secret';
//         break;
//     default:
//         $client = 'no login';
//         break;
// }

$client = match($login){
    'github' =>  'github_client_secret',
    'facebook' =>  'facebook_client_secret',
    'google' =>  'google_client_secret',
    'a', 'b' => 'value ab',
    default => 'value'
};

echo $client;
