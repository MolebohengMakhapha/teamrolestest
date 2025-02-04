<?php
declare(strict_types=1);

use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
use Migrations\BaseSeed;

/**
 * SampleData seed.
 */
class SampleDataSeed extends BaseSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/migrations/4/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Team Player', 'points' => 11],
            ['name' => 'Innovator', 'points' => 11],
            ['name' => 'Expert', 'points' => 11],
            ['name' => 'Explorer', 'points' => 11],
            ['name' => 'Executive', 'points' => 11],
            ['name' => 'Analyst', 'points' => 11],
            ['name' => 'Driver', 'points' => 11],
            ['name' => 'Chairperson', 'points' => 11],
            ['name' => 'Completer', 'points' => 11],
        ];

        $table = TableRegistry::getTableLocator()->get('TeamRoles');

        // Insert data
        foreach ($data as $row) {
            $entity = $table->newEntity($row);
            $table->save($entity);
        }
    }
}
