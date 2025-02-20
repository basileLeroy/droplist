<?php

require 'app/models/Pokemon.php';
require_once "data/pokemon.php";

$title = "Example";

$pokemons = [];

foreach($pokemonList as $pokemon) {
    $newPokemon = new Pokemon(
        $pokemon["name"],
        $pokemon["type"],
        $pokemon["rarity"],
        $pokemon["image"],
    );

    array_push($pokemons, $newPokemon);
}

require_once "views/example.view.php";