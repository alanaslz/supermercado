<?php
App::uses('Oferta', 'Model');

/**
 * Oferta Test Case
 *
 */
class OfertaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.oferta',
		'app.produto',
		'app.categoria',
		'app.marca',
		'app.unidade',
		'app.estoque',
		'app.loja',
		'app.venda',
		'app.usuario',
		'app.role',
		'app.modulo',
		'app.modulo_operacao',
		'app.modulo_usuario',
		'app.produtos_venda'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Oferta = ClassRegistry::init('Oferta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Oferta);

		parent::tearDown();
	}

}
