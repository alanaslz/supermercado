<?php
/**
 * OfertaFixture
 *
 */
class OfertaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'produto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'percentual' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'data' => array('type' => 'date', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'produto_id' => 1,
			'percentual' => 1,
			'data' => '2016-07-30',
			'created' => '2016-07-30 20:03:03',
			'modified' => '2016-07-30 20:03:03'
		),
	);

}
