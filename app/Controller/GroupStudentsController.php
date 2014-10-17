<?php
App::uses('AppController', 'Controller');
/**
 * GroupStudents Controller
 *
 * @property GroupStudent $GroupStudent
 * @property PaginatorComponent $Paginator
 */
class GroupStudentsController extends AppController {

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
	public function index() {
		$this->GroupStudent->recursive = 0;
		$this->set('groupStudents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GroupStudent->exists($id)) {
			throw new NotFoundException(__('Invalid group student'));
		}
		$options = array('conditions' => array('GroupStudent.' . $this->GroupStudent->primaryKey => $id));
		$this->set('groupStudent', $this->GroupStudent->find('first', $options));
                $this->loadModel('');
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if ($this->request->is('post')) {
			$this->GroupStudent->create();
			if ($this->GroupStudent->save($this->request->data)) {
				$this->Session->setFlash(__('The group student has been saved.'));
				return $this->redirect(array('controller' => 'groups', 'action' => 'viewstudents', $id));
			} else {
				$this->Session->setFlash(__('The group student could not be saved. Please, try again.'));
			}
		}
                $options = array('fields'=>array('nome'),'conditions' => array('Group.id' => $id));
		$groups = $this->GroupStudent->Group->find('list', $options);
       		$students = $this->GroupStudent->Student->find('list', array('fields'=>array('nome')));
		$this->set(compact('groups', 'students'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GroupStudent->exists($id)) {
			throw new NotFoundException(__('Invalid group student'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GroupStudent->save($this->request->data)) {
				$this->Session->setFlash(__('The group student has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group student could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GroupStudent.' . $this->GroupStudent->primaryKey => $id));
			$this->request->data = $this->GroupStudent->find('first', $options);
		}
		$groups = $this->GroupStudent->Group->find('list');
		$students = $this->GroupStudent->Student->find('list', array('fields'=>array('nome')));
		$this->set(compact('groups', 'students'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $idgroup=null, $idstudent = null) {
		$this->GroupStudent->id = $id;
		if (!$this->GroupStudent->exists()) {
			throw new NotFoundException(__('Invalid group student'));
		}
                $this->loadModel('DisciplineStudent');
                $sql='SELECT `DisciplineStudent`.`id`, `DisciplineStudent`.`status`, `DisciplineStudent`.`discipline_groups_id`, `DisciplineStudent`.`students_id`, `DisciplineGroups`.`id`, `DisciplineGroups`.`discipline_id`, `DisciplineGroups`.`group_id`, `Students`.`id`, `Students`.`nome` FROM `escolabd`.`discipline_students` AS `DisciplineStudent` LEFT JOIN `escolabd`.`discipline_groups` AS `DisciplineGroups` ON (`DisciplineStudent`.`discipline_groups_id` = `DisciplineGroups`.`id`) LEFT JOIN `escolabd`.`students` AS `Students` ON (`DisciplineStudent`.`students_id` = `Students`.`id`) WHERE `Students`.`id` = '.$idstudent.' AND `DisciplineGroups`.`group_id` ='.$idgroup .' AND `DisciplineStudent`.`status`= "ATIVO"';
                $disciplineStudents=$this->DisciplineStudent->query($sql);
                if(empty($disciplineStudents)){
                    $this->request->allowMethod('post', 'delete');
                    if ($this->GroupStudent->delete()) {
                            $this->Session->setFlash(__('The group student has been deleted.'));
                    } else {
                            $this->Session->setFlash(__('The group student could not be deleted. Please, try again.'));
                    }
                    return $this->redirect(array('controller' => 'groups', 'action' => 'viewstudents', $idgroup));
                }else{
                    $this->Session->setFlash(__('The group student could not be deleted. Please, try again.'));
                    return $this->redirect(array('controller' => 'groups', 'action' => 'viewstudents', $idgroup));
                }
	}
        
}
