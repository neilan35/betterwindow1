<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuoteproductsFixture
 *
 */
class QuoteproductsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'quote_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'colour_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'balrating_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'itemtype_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'design_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'reveal_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'flyscreenmesh_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'glazing_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'height' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'width' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'quote_key' => ['type' => 'index', 'columns' => ['quote_id'], 'length' => []],
            'colour_key' => ['type' => 'index', 'columns' => ['colour_id'], 'length' => []],
            'balrating_key' => ['type' => 'index', 'columns' => ['balrating_id'], 'length' => []],
            'itemtype_key' => ['type' => 'index', 'columns' => ['itemtype_id'], 'length' => []],
            'design_key' => ['type' => 'index', 'columns' => ['design_id'], 'length' => []],
            'reveal_key' => ['type' => 'index', 'columns' => ['reveal_id'], 'length' => []],
            'flyscreenmesh_key' => ['type' => 'index', 'columns' => ['flyscreenmesh_id'], 'length' => []],
            'glazing_key' => ['type' => 'index', 'columns' => ['glazing_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'quoteproducts_ibfk_1' => ['type' => 'foreign', 'columns' => ['quote_id'], 'references' => ['quotes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'quoteproducts_ibfk_2' => ['type' => 'foreign', 'columns' => ['colour_id'], 'references' => ['colours', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'quoteproducts_ibfk_3' => ['type' => 'foreign', 'columns' => ['balrating_id'], 'references' => ['balratings', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'quoteproducts_ibfk_4' => ['type' => 'foreign', 'columns' => ['itemtype_id'], 'references' => ['itemtypes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'quoteproducts_ibfk_5' => ['type' => 'foreign', 'columns' => ['design_id'], 'references' => ['designs', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'quoteproducts_ibfk_6' => ['type' => 'foreign', 'columns' => ['reveal_id'], 'references' => ['reveals', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'quoteproducts_ibfk_7' => ['type' => 'foreign', 'columns' => ['flyscreenmesh_id'], 'references' => ['flyscreenmeshes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'quoteproducts_ibfk_8' => ['type' => 'foreign', 'columns' => ['glazing_id'], 'references' => ['glazings', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'quote_id' => 1,
            'colour_id' => 1,
            'balrating_id' => 1,
            'itemtype_id' => 1,
            'design_id' => 1,
            'reveal_id' => 1,
            'flyscreenmesh_id' => 1,
            'glazing_id' => 1,
            'height' => 1,
            'width' => 1,
            'created' => '2015-09-04 12:02:42',
            'modified' => '2015-09-04 12:02:42'
        ],
    ];
}
