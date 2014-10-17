<?php
/**
 * BillStudentFixture
 *
 */
class BillStudentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nota' => array('type' => 'float', 'null' => true, 'default' => '0', 'unsigned' => false),
		'bills_idbills' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'discipline_students_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_billsstudents_bills1' => array('column' => 'bills_idbills', 'unique' => 0),
			'fk_bill_students_discipline_students1' => array('column' => 'discipline_students_id', 'unique' => 0)
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
			'id' => '',
			'nota' => 1,
			'bills_idbills' => 1,
			'discipline_students_id' => 1
		),
	);

}
