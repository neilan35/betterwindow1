<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuotesFixture
 *
 */
class QuotesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'customer_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'quoteno' => ['type' => 'string', 'length' => 55, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'item' => ['type' => 'string', 'length' => 55, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'unitcost' => ['type' => 'decimal', 'length' => 12, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'quantity' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'installation' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'installtype' => ['type' => 'string', 'length' => 55, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'delivery' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'deliverytype' => ['type' => 'string', 'length' => 55, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'status' => ['type' => 'string', 'length' => 25, 'null' => false, 'default' => 'Pending', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'customer_key' => ['type' => 'index', 'columns' => ['customer_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'quotes_ibfk_1' => ['type' => 'foreign', 'columns' => ['customer_id'], 'references' => ['customers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
'engine' => 'InnoDB', 'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'customer_id' => 1,
            'quoteno' => 'Lorem ipsum dolor sit amet',
            'item' => 'Lorem ipsum dolor sit amet',
            'unitcost' => '',
            'quantity' => 1,
            'installation' => 1,
            'installtype' => 'Lorem ipsum dolor sit amet',
            'delivery' => 1,
            'deliverytype' => 'Lorem ipsum dolor sit amet',
            'status' => 'Lorem ipsum dolor sit a',
            'created' => '2015-09-04 12:02:23',
            'modified' => '2015-09-04 12:02:23'
        ],
    ];
}
