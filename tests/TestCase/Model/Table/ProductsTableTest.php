<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsTable Test Case
 */
class ProductsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Products' => 'app.products',
        'Quotes' => 'app.quotes',
        'Customers' => 'app.customers',
        'Users' => 'app.users',
        'Employees' => 'app.employees',
        'Roles' => 'app.roles',
        'Colours' => 'app.colours',
        'Categories' => 'app.categories',
        'Balratings' => 'app.balratings',
        'Flyscreenmeshes' => 'app.flyscreenmeshes',
        'Meshtypes' => 'app.meshtypes',
        'Flyscreenopentypes' => 'app.flyscreenopentypes',
        'Opentypes' => 'app.opentypes',
        'Itemtypes' => 'app.itemtypes',
        'Designs' => 'app.designs',
        'Pictures' => 'app.pictures',
        'Flyscreentypes' => 'app.flyscreentypes',
        'Glazings' => 'app.glazings',
        'Usages' => 'app.usages',
        'Glasstypes' => 'app.glasstypes',
        'Compositions' => 'app.compositions',
        'Reveals' => 'app.reveals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Products') ? [] : ['className' => 'App\Model\Table\ProductsTable'];        $this->Products = TableRegistry::get('Products', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Products);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
