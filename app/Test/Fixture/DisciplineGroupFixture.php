<?php
/**
 * DisciplineGroupFixture
 *
 */
class DisciplineGroupFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'teacher_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'discipline_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_disciplinesgroups_teachers1' => array('column' => 'teacher_id', 'unique' => 0),
			'fk_disciplinesgroups_disciplines1' => array('column' => 'discipline_id', 'unique' => 0),
			'fk_disciplinesgroups_groups1' => array('column' => 'group_id', 'unique' => 0)
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
			'teacher_id' => 1,
			'discipline_id' => 1,
			'group_id' => 1
		),
	);

}
