<?php
/**
 * FrequencyFixture
 *
 */
class FrequencyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'falta' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'classnote_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'discipline_students_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_frequencies_classnotes1' => array('column' => 'classnote_id', 'unique' => 0),
			'fk_frequencies_discipline_students1' => array('column' => 'discipline_students_id', 'unique' => 0)
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
			'falta' => 1,
			'classnote_id' => 1,
			'discipline_students_id' => 1
		),
	);

}
