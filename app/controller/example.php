<?php

// Require the needed files
require "app/models/Pokemon.php";
require_once "data/pokemon.php";

// Logic here!

// page title
$title = "Example";


// transform list of pokemon into array of objects
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

// Load the view
require_once "views/example.view.php";