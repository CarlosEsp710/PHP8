<?php

// class Post
// {
//     public function __construct(public $title, public $body)
//     {
//     }
// }

// $post = new Post(
//     title: "título",
//     body: "contenido"
// );

// var_dump($post);

function test($title, $slug, $content)
{
    var_dump($title, $slug, $content);
}

test(
    title: "mi titulo",
    content: "contenido",
    slug: "mi slug"
);
