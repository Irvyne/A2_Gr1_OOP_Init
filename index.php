<?php

require __DIR__.'/vendor/autoload.php';

use Cartman\Init\Article;
use Cocur\Slugify\Slugify;

$article = new Article();
$slugify = new Slugify();

$title = 'zefzefze zejkfbi ebfze &(-sdv  jlnô ü efihn Jinflazd ';

$article
    ->setId(4)
    ->setTitle($title)
    ->setSlug($slugify->slugify($title))
    ->setStatus(Article::STATUS_PENDING)
;

var_dump($article);
