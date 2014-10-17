<?php
/**
 * DisciplineFixture
 *
 */
class DisciplineFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'chteorica' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'chpratica' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'cdtotal' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'course_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_disciplines_courses1' => array('column' => 'course_id', 'unique' => 0)
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
			'nome' => 'Lorem ipsum dolor sit amet',
			'chteorica' => 1,
			'chpratica' => 1,
			'cdtotal' => 1,
			'course_id' => 1
		),
	);

}
