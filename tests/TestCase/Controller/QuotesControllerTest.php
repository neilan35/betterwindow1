<?php
namespace App\Test\TestCase\Controller;

use App\Controller\QuotesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\QuotesController Test Case
 */
class QuotesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Quotes' => 'app.quotes',
        'Customers' => 'app.customers',
        'Users' => 'app.users',
        'Employees' => 'app.employees',
        'Roles' => 'app.roles',
        'Quoteproducts' => 'app.quoteproducts'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
