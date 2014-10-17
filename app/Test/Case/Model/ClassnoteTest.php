<?php
App::uses('Classnote', 'Model');

/**
 * Classnote Test Case
 *
 */
class ClassnoteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.classnote',
		'app.discipline_groups',
		'app.frequency'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Classnote = ClassRegistry::init('Classnote');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Classnote);

		parent::tearDown();
	}

}
