<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/src/Article.php';

$article = new Article();
$slugify = new \Cocur\Slugify\Slugify();

"Cocur/Slugify/Slugify.php";

$title = 'zefzefze zejkfbi ebfze &(-sdv  jlnô ü efihn Jinflazd ';

$article
    ->setId(4)
    ->setTitle($title)
    ->setSlug($slugify->slugify($title))
    ->setStatus(Article::STATUS_PENDING)
;

var_dump($article);
