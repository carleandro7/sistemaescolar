<?php
App::uses('DisciplineStudent', 'Model');

/**
 * DisciplineStudent Test Case
 *
 */
class DisciplineStudentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.discipline_student',
		'app.discipline_groups',
		'app.students'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DisciplineStudent = ClassRegistry::init('DisciplineStudent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DisciplineStudent);

		parent::tearDown();
	}

}
