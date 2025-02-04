<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeamRolesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeamRolesTable Test Case
 */
class TeamRolesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TeamRolesTable
     */
    protected $TeamRoles;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.TeamRoles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TeamRoles') ? [] : ['className' => TeamRolesTable::class];
        $this->TeamRoles = $this->getTableLocator()->get('TeamRoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TeamRoles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TeamRolesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
