<?php
App::uses('LayersPlace', 'Model');

/**
 * LayersPlace Test Case
 */
class LayersPlaceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.layers_place',
		'app.layer',
		'app.place'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LayersPlace = ClassRegistry::init('LayersPlace');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LayersPlace);

		parent::tearDown();
	}

}
