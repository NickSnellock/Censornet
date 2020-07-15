<?php
namespace NickSnellockTests\Repositories;

use Mockery;
use NickSnellock\Entities\Vegetable;
use NickSnellock\Entities\VegetableCollection;
use NickSnellock\Repositories\VegetableRepository;
use NickSnellock\Services\ContainerFactory;
use NickSnellock\Services\Database;
use PHPUnit\Framework\TestCase;

class VegetableRepositoryTest extends TestCase
{
    public function testGetVegetables()
    {
        $mockPdo = Mockery::mock(\PDO::class);
        $mockPdo->shouldReceive('pgsqlCopyToArray')
            ->andReturn(["1\tname\tclassification\tdescription\tt"]);
        $mockDbClass = Mockery::mock(Database::class);
        $mockDbClass->shouldReceive('getPdo')->andReturn($mockPdo);

        $container = ContainerFactory::build([Database::class => $mockDbClass]);

        $vegetableRepository = $container->get(VegetableRepository::class);

        $vegetables = $vegetableRepository->getVegetables();

        $this->assertInstanceOf(VegetableCollection::class, $vegetables);
        $this->assertEquals(1, $vegetables->count());
        $vegetable = $vegetables->first();
        $this->assertInstanceOf(Vegetable::class, $vegetable);
    }
}