<?php
App::uses('AppController', 'Controller');
/**
 * Bills Controller
 *
 * @property Bill $Bill
 * @property PaginatorComponent $Paginator
 */
class BillsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index($id = null) {
		$this->Bill->recursive = 0;
                $options = array('conditions' => array('Bill.discipline_group_id' => $id));
                $this->paginate = $options;
                $this->set('id',$id);
                $this->set('bills', $this->Paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bill->exists($id)) {
			throw new NotFoundException(__('Invalid bill'));
		}
                
		$options = array('conditions' => array('Bill.' . $this->Bill->primaryKey => $id));
                $bill=$this->Bill->find('first', $options);
                $disciplineGroup = $bill['Bill']['discipline_group_id'];
                $this->loadModel('DisciplineStudent');
                $sql = 'SELECT `DisciplineStudent`.`id`, `DisciplineStudent`.`discipline_groups_id`, `DisciplineStudent`.`students_id`, `DisciplineGroups`.`id`, `DisciplineGroups`.`teacher_id`, `DisciplineGroups`.`discipline_id`, `DisciplineGroups`.`group_id`, `Students`.`id`, `Students`.`nome` FROM `escolabd`.`discipline_students` AS `DisciplineStudent` LEFT JOIN `escolabd`.`discipline_groups` AS `DisciplineGroups` ON (`DisciplineStudent`.`discipline_groups_id` = `DisciplineGroups`.`id`) LEFT JOIN `escolabd`.`students` AS `Students` ON (`DisciplineStudent`.`students_id` = `Students`.`id`) WHERE `DisciplineGroups`.`id` = '.$disciplineGroup;
                $billStudents  = $this->DisciplineStudent->query($sql);
		$this->set(compact('bill','disciplineGroups', 'billStudents'));
		
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idgroup = null) {
		if ($this->request->is('post')) {
			$this->Bill->create();
                        if ($this->Bill->saveAll($this->request->data)) {
                                $this->Session->setFlash(__('The bill has been saved.'));
				return $this->redirect(array('action' => 'index',$this->request->data['Bill']['discipline_group_id']));
			} else {
				$this->Session->setFlash(__('The bill could not be saved. Please, try again.'));
			}
		}
                $this->loadModel('DisciplineStudent');
                
                $sql = 'SELECT `DisciplineStudent`.`id`, `DisciplineStudent`.`discipline_groups_id`, `DisciplineStudent`.`students_id`, `DisciplineGroups`.`id`, `DisciplineGroups`.`teacher_id`, `DisciplineGroups`.`discipline_id`, `DisciplineGroups`.`group_id`, `Students`.`id`, `Students`.`nome` FROM `escolabd`.`discipline_students` AS `DisciplineStudent` LEFT JOIN `escolabd`.`discipline_groups` AS `DisciplineGroups` ON (`DisciplineStudent`.`discipline_groups_id` = `DisciplineGroups`.`id`) LEFT JOIN `escolabd`.`students` AS `Students` ON (`DisciplineStudent`.`students_id` = `Students`.`id`) WHERE `DisciplineGroups`.`id` = '.$idgroup;
                $billStudents  = $this->DisciplineStudent->query($sql);
               	$options = array('conditions' => array('DisciplineGroup.id' => $idgroup));
		$disciplineGroups = $this->Bill->DisciplineGroup->find('list', $options);
                
		$this->set(compact('disciplineGroups', 'billStudents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Bill->exists($id)) {
			throw new NotFoundException(__('Invalid bill'));
		}
		if ($this->request->is(array('post', 'put'))) {
                    
			if ($this->Bill->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The bill has been saved.'));
				return $this->redirect(array('action' => 'index',$this->request->data['Bill']['discipline_group_id']));
			} else {
				$this->Session->setFlash(__('The bill could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bill.' . $this->Bill->primaryKey => $id));
			$this->request->data = $this->Bill->find('first', $options);
                        
                        $iddisciplinegroups= $this->request->data['Bill']['discipline_group_id'];
                        $sql='SELECT `BillStudent`.`id`,`BillStudent`.`nota`,`BillStudent`.`discipline_student_id`, `BillStudent`.`bill_id`,`DisciplineStudent`.`id`, `DisciplineStudent`.`discipline_groups_id`, `DisciplineStudent`.`students_id`, `DisciplineGroups`.`id`, `DisciplineGroups`.`teacher_id`, `DisciplineGroups`.`discipline_id`, `DisciplineGroups`.`group_id`, `Students`.`id`, `Students`.`nome` FROM `escolabd`.`discipline_students` AS `DisciplineStudent` LEFT JOIN `escolabd`.`discipline_groups` AS `DisciplineGroups` ON (`DisciplineStudent`.`discipline_groups_id` = `DisciplineGroups`.`id`) LEFT JOIN `escolabd`.`students` AS `Students` ON (`DisciplineStudent`.`students_id` = `Students`.`id`) LEFT JOIN `escolabd`.`bill_students` AS `BillStudent` ON (`DisciplineStudent`.`id` = `BillStudent`.`discipline_student_id` and `BillStudent`.`bill_id` = '.$id.') WHERE `DisciplineGroups`.`id` = '.$iddisciplinegroups;
                        $billStudents  = $this->Bill->BillStudent->query($sql);
                        $this->set(compact('billStudents'));
		}
		
		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $iddiscipline = null) {
		$this->Bill->id = $id;
		if (!$this->Bill->exists()) {
			throw new NotFoundException(__('Invalid bill'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bill->delete()) {
			return $this->redirect(array('action' => 'index',$iddiscipline));
		} else {
			$this->Session->setFlash(__('The bill could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
