<?php

require 'kirby/bootstrap.php';

$kirby = new Kirby([
    'roots' => [
        'content' => '../comarts_content/content',
    ],
]);

echo (new Kirby)->render();
