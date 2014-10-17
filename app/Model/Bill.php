<?php
App::uses('AppModel', 'Model');
/**
 * Bill Model
 *
 * @property DisciplineGroup $DisciplineGroup
 */
class Bill extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'dataavaliacao' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'descricao' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'discipline_group_id' => array(
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
		'DisciplineGroup' => array(
			'className' => 'DisciplineGroup',
			'foreignKey' => 'discipline_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
      public $hasMany = array(
      'BillStudent' => array(
         'className' => 'BillStudent',
         'foreignKey' => 'bill_id',
         'dependent' => false,
	 'conditions' => '',
	 'fields' => 'id,discipline_student_id,nota',
	 'order' => '',
	 'limit' => '',
	 'offset' => '',
	 'exclusive' => '',
	 'finderQuery' => '',
	 'counterQuery' => ''
	)
   );

}
