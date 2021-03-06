<?php
App::uses('Inventario', 'Model');

/**
 * Inventario Test Case
 *
 */
class InventarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.inventario',
		'app.estoque',
		'app.loja',
		'app.produto',
		'app.categoria',
		'app.marca',
		'app.unidade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Inventario = ClassRegistry::init('Inventario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Inventario);

		parent::tearDown();
	}

}
