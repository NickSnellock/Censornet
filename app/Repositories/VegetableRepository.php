<?php
namespace NickSnellock\Repositories;

use DI\Annotation\Inject;
use NickSnellock\Entities\Vegetable;
use NickSnellock\Entities\VegetableCollection;
use NickSnellock\Services\Database;

class VegetableRepository
{
    /**
     * @var VegetableCollection
     */
    private $vegetableCollection;

    /**
     * @Inject
     * @var Database
     */
    protected $db;

    public function getVegetables(): VegetableCollection
    {
        $this->vegetableCollection = new VegetableCollection();

        $vegetablesArray = $this->db->getPdo()->pgsqlCopyToArray('vegetables');
        foreach($vegetablesArray as $vegetableString) {
            $vegetableArray = explode("\t", $vegetableString);
            $this->vegetableCollection->add(new Vegetable(
                $vegetableArray[0],
                $vegetableArray[1],
                $vegetableArray[2],
                $vegetableArray[3],
                trim($vegetableArray[4]) == 't'
            ));
        }

        return $this->vegetableCollection;
    }
}