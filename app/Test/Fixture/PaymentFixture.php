<?php
/**
 * PaymentFixture
 *
 */
class PaymentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'datagerado' => array('type' => 'date', 'null' => true, 'default' => null),
		'datapagamento' => array('type' => 'date', 'null' => true, 'default' => null),
		'mesreferencia' => array('type' => 'date', 'null' => true, 'default' => null),
		'valor' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'descricao' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'quitada' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'student_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_payments_students1' => array('column' => 'student_id', 'unique' => 0)
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
			'datagerado' => '2014-09-02',
			'datapagamento' => '2014-09-02',
			'mesreferencia' => '2014-09-02',
			'valor' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'quitada' => 'Lorem ip',
			'student_id' => 1
		),
	);

}
