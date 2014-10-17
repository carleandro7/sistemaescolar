<?php
App::uses('AppModel', 'Model');
/**
 * BillStudent Model
 *
 * @property Bill $Bill
 * @property DisciplineStudent $DisciplineStudent
 */
class BillStudent extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'bill_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'discipline_student_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Bill' => array(
			'className' => 'Bill',
			'foreignKey' => 'bill_id',
			'conditions' => '',
			'fields' => 'id',
			'order' => ''
		),
		'DisciplineStudent' => array(
			'className' => 'DisciplineStudent',
			'foreignKey' => 'discipline_student_id',
			'conditions' => '',
			'fields' => 'id',
			'order' => ''
		)
	);
}
