<?php
App::uses('Frequency', 'Model');

/**
 * Frequency Test Case
 *
 */
class FrequencyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.frequency',
		'app.classnote',
		'app.discipline_groups',
		'app.discipline_students'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Frequency = ClassRegistry::init('Frequency');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Frequency);

		parent::tearDown();
	}

}
