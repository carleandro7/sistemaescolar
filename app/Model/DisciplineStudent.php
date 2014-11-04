<?php
App::uses('AppModel', 'Model');
/**
 * DisciplineStudent Model
 *
 * @property DisciplineGroups $DisciplineGroups
 * @property Students $Students
 */
class DisciplineStudent extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
    public function __construct($id = false, $table = null, $ds = null) {
        parent::__construct($id, $table, $ds);
        $sql = "  SELECT `Discipline`.`nome` FROM `escolabd`.`disciplines` AS `Discipline` where `Discipline`.id = `DisciplineGroups`.`discipline_id`";
        $this->virtualFields['nomeDisciplina'] = $sql;
    }
	public $validate = array(
		'discipline_groups_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'students_id' => array(
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
		'DisciplineGroups' => array(
			'className' => 'DisciplineGroups',
			'foreignKey' => 'discipline_groups_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Students' => array(
			'className' => 'Students',
			'foreignKey' => 'students_id',
			'conditions' => '',
			'fields' => 'id,nome',
			'order' => ''
		),
                'Groups' => array(
			'className' => 'Groups',
			'foreignKey' => '',
			'conditions' => 'Groups.id = DisciplineGroups.group_id',
			'fields' => 'id,nome',
			'order' => ''
		)
	);
}
