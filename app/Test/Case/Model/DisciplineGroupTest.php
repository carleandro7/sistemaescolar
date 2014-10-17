<?php
App::uses('DisciplineGroup', 'Model');

/**
 * DisciplineGroup Test Case
 *
 */
class DisciplineGroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.discipline_group',
		'app.teacher',
		'app.discipline',
		'app.course',
		'app.school',
		'app.student',
		'app.payment',
		'app.docket',
		'app.user',
		'app.group',
		'app.group_student'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DisciplineGroup = ClassRegistry::init('DisciplineGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DisciplineGroup);

		parent::tearDown();
	}

}
