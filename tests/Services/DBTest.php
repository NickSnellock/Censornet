<?php
namespace NickSnellockTests\Services;

use NickSnellock\Services\Database;
use \PHPUnit\Framework\TestCase;
use \PDO;

class DBTest extends TestCase
{
    /**
     * @var Database
     */
    private $database;

    public function setUp(): void
    {
        parent::setUp();
        $this->database = new Database();
    }

    public function testGetPdo()
    {
        $pdo = $this->database->getPdo();
        $this->assertInstanceOf(PDO::class, $pdo);
    }
}
