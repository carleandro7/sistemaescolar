<?php
App::uses('AppModel', 'Model');
/**
 * Frequency Model
 *
 * @property Classnote $Classnote
 * @property DisciplineStudents $DisciplineStudents
 */
class Frequency extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'classnote_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'discipline_students_id' => array(
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
		'Classnote' => array(
			'className' => 'Classnote',
			'foreignKey' => 'classnote_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DisciplineStudents' => array(
			'className' => 'DisciplineStudents',
			'foreignKey' => 'discipline_students_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
