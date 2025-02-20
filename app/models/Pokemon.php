<?php

/**
 * Class Pokemon
 *
 * Represents a Pokemon with name, type, rarity, and an image.
 */
class Pokemon
{
    // properties
    public string $name;
    public string $type;
    public string $rarity;
    public string $image;

    /**
     * @param string $name The name of the Pokemon.
     * @param string $type The type of the Pokemon.
     * @param string $rarity The rarity level of the Pokemon.
     * @param string $image The URL or path of the Pokemon's image.
     */
    public function __construct(string $name, string $type, string $rarity, string $image)
    {
        $this->name = $name;
        $this->type = $type;
        $this->rarity = $rarity;
        $this->image = $image;
    }

    // methods
    public function isRare()
    {
        if ($this->rarity === "Rare") {
            return true;
        }

        return false;
    }
}