<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecommendationsFixture
 *
 */
class RecommendationsFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'my_app.Recommendations';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Users_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Books_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'Books_id_idx' => ['type' => 'index', 'columns' => ['Books_id'], 'length' => []],
            'Users_id_idx' => ['type' => 'index', 'columns' => ['Users_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'Books_r_id' => ['type' => 'foreign', 'columns' => ['Books_id'], 'references' => ['Books', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'Users_r_id' => ['type' => 'foreign', 'columns' => ['Users_id'], 'references' => ['Users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
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
            'Users_id' => 1,
            'Books_id' => 1,
            'name' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
