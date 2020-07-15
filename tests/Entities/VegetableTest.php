<?php
namespace NickSnellockTests\Entities;

use NickSnellock\Entities\Vegetable;
use PHPUnit\Framework\TestCase;

class VegetableTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testGetters($id, $name, $classification, $description, $edible)
    {
        $vegetable = new Vegetable($id, $name, $classification, $description, $edible);
        $this->assertEquals($id, $vegetable->getId());
        $this->assertEquals($name, $vegetable->getName());
        $this->assertEquals($classification, $vegetable->getClassification());
        $this->assertEquals($description, $vegetable->getDescription());
        $this->assertEquals($edible, $vegetable->isEdible());
    }

    /**
     * @dataProvider dataProvider
     */
    public function testToArray($id, $name, $classification, $description, $edible)
    {
        $vegetable = new Vegetable($id, $name, $classification, $description, $edible);

        $this->assertEquals(
            [
                'id' => $id,
                'name' => $name,
                'classification' => $classification,
                'description' => $description,
                'edible' => $edible
            ],
            $vegetable->toArray());
    }

    public function dataProvider()
    {
        return [
            'All attributes present and valid' => [
                1,
                'name1',
                'classification1',
                'description',
                true,
            ],
            'Id and description null' => [
                null,
                'name1',
                'classification1',
                null,
                true,
            ],
            'Not edible' => [
                1,
                'name1',
                'classification1',
                'description',
                false,
            ]
        ];
    }
}