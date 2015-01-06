<?php

require __DIR__.'/vendor/autoload.php';

use Cartman\Init\Pokemon\PokemonFire;
use Cartman\Init\Pokemon\PokemonWater;
use Cartman\Init\Pokemon\PokemonPlant;

$pokemonFire = new PokemonFire();
$pokemonFire
    ->setName('Salamèche')
    ->setHP(100)
;

$pokemonWater = new PokemonWater();
$pokemonWater
    ->setName('Carapuce')
    ->setHP(100)
;

$pokemonPlant = new PokemonPlant();
$pokemonPlant
    ->setName('Bulbizarre')
    ->setHP(100)
;


$pokemons = [$pokemonWater, $pokemonFire, $pokemonPlant];
shuffle($pokemons);

$striker    = array_pop($pokemons);
$goal       = array_pop($pokemons);

var_dump($striker, $goal);



$attack = mt_rand(5, 20);

if (true === $striker->isTypeWeak($goal->getType()))
    $attack = (int)ceil($attack / 2);

if (true === $striker->isTypeStrong($goal->getType()))
    $attack = (int)ceil($attack * 2);

$goal->removeHP($attack);




var_dump('----------------------------');

var_dump($striker, $goal);
