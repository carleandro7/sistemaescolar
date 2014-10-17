<?php
/**
 * DisciplineStudentFixture
 *
 */
class DisciplineStudentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mediafinal' => array('type' => 'string', 'null' => true, 'default' => '0', 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'discipline_groups_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'students_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_discipline_students_discipline_groups1' => array('column' => 'discipline_groups_id', 'unique' => 0),
			'fk_discipline_students_students1' => array('column' => 'students_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'status' => 'Lorem ip',
			'mediafinal' => 'Lorem ipsum dolor sit amet',
			'discipline_groups_id' => 1,
			'students_id' => 1
		),
	);

}
