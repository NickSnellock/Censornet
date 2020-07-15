<?php

namespace NickSnellock\Entities;

use Doctrine\Common\Collections\ArrayCollection;

class VegetableCollection extends ArrayCollection
{
    public function __construct($input = [])
    {
        $vegetables = [];
        foreach ($input as $inputLine) {
            $vegetables[] = new Vegetable(
                $input['id'],
                $input['name'],
                $input['classification'],
                $input['description'],
                $input['edible']
            );
        }
        parent::__construct($vegetables);
    }

    public function toArray(): array {
        $vegetableArray = [];

        foreach ($this as $vegetable){
            $vegetableArray[] = $vegetable->toArray();
        }

        return $vegetableArray;
    }
}