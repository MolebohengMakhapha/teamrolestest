<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\UsersController Test Case
 *
 * @uses \App\Controller\UsersController
 */
class UsersControllerTest extends TestCase
{
    use IntegrationTestTrait;

    public function testIndex()
    {
        $this->get('/users'); 
        $this->assertResponseOk(); 
    }

    public function testView()
    {
        $this->get('/users/view/1'); 
        $this->assertResponseOk(); 
    }
}