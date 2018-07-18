<?php
App::uses('Loja', 'Model');

/**
 * Loja Test Case
 *
 */
class LojaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.loja'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Loja = ClassRegistry::init('Loja');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Loja);

		parent::tearDown();
	}

}
