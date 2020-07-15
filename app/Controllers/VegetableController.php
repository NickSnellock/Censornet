<?php

namespace NickSnellock\Controllers;

use DI\Annotation\Inject;
use NickSnellock\Repositories\VegetableRepository;
use NickSnellock\Views\JsonView;
use NickSnellock\Views\TableView;

class VegetableController
{
    /**
     * @var VegetableRepository
     * @Inject
     */
    private VegetableRepository $vegetableRepository;

    public function getVegetablesApi(): string
    {
        return new JsonView($this->vegetableRepository->getVegetables()->toArray());
    }

    public function getVegetables()
    {
        echo new TableView($this->vegetableRepository->getVegetables()->toArray(), ['edible']);
    }
}