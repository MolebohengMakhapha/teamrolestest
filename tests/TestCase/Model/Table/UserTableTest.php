<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class UserTableTest extends TestCase
{
    public $Users;

    public function setUp(): void
    {
        parent::setUp();
        $this->Users = TableRegistry::getTableLocator()->get('Users');
    }

    public function tearDown(): void
    {
        unset($this->Users);
        parent::tearDown();
    }

    public function testInitialize()
    {
        $this->assertNotNull($this->Users);
    }

    public function testValidationDefault()
    {
        $user = $this->Users->newEntity([
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => 'password123'
        ]);
        $this->assertEmpty($user->getErrors()); 
    }

    public function testInvalidEmail()
    {
        $user = $this->Users->newEntity([
            'username' => 'testuser',
            'email' => 'invalid-email',
            'password' => 'password123'
        ]);
        $this->assertNotEmpty($user->getErrors());
        $this->assertArrayHasKey('email', $user->getErrors());
    }
}