<?php
/**
 * InventarioFixture
 *
 */
class InventarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'estoque_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'qtd' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'preco_custo' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'preco_venda' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
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
			'estoque_id' => 1,
			'qtd' => 1,
			'preco_custo' => '',
			'preco_venda' => '',
			'created' => '2016-07-20 19:45:37',
			'modified' => '2016-07-20 19:45:37'
		),
	);

}
