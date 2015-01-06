<?php

require __DIR__.'/vendor/autoload.php';

use Cartman\Init\Pokemon\PokemonFire;

$pokemon = new PokemonFire();

$pokemon
    ->setName('Salamèche')
    ->setHP(100)
;

var_dump($pokemon);