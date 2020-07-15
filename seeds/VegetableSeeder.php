<?php
use Phinx\Seed\AbstractSeed;
use \Faker\Factory;

class VegetableSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $faker = Factory::create('en_GB');

        $data = [];

        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'name' => $faker->name,
                'classification' => $faker->word(),
                'description' => $faker->boolean(20) ? null: $faker->sentence(10),
                'edible' => $faker->boolean(),
            ];
        }

        $vegetableTable = $this->table('vegetables');
        $vegetableTable->insert($data)->save();
    }
}
