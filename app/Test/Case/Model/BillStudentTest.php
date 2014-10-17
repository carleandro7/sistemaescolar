<?php
App::uses('BillStudent', 'Model');

/**
 * BillStudent Test Case
 *
 */
class BillStudentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bill_student',
		'app.discipline_students'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BillStudent = ClassRegistry::init('BillStudent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BillStudent);

		parent::tearDown();
	}

}
