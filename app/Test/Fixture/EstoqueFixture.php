<?php
/**
 * EstoqueFixture
 *
 */
class EstoqueFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'loja_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'produto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'qtd_min' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'qtd_max' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			
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
			'loja_id' => 1,
			'produto_id' => 1,
			'qtd_min' => 1,
			'qtd_max' => 1,
			'created' => '2016-07-20 19:32:15',
			'modified' => '2016-07-20 19:32:15'
		),
	);

}
