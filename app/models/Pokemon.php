<?php

class Pokemon
{
    // properties
    public string $name;
    public string $type;
    public string $rarity;
    public string $image;


    //__constructor
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