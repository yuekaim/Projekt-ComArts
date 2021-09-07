<?php

require 'kirby/bootstrap.php';

$kirby = new Kirby([
    'roots' => [
        'content' => '/content',
    ],
]);

echo (new Kirby)->render();
