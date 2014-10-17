<?php
App::uses('GroupStudent', 'Model');

/**
 * GroupStudent Test Case
 *
 */
class GroupStudentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.group_student',
		'app.group',
		'app.course',
		'app.school',
		'app.student',
		'app.payment',
		'app.docket',
		'app.user',
		'app.discipline',
		'app.discipline_group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GroupStudent = ClassRegistry::init('GroupStudent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GroupStudent);

		parent::tearDown();
	}

}
