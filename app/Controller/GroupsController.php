<?php
App::uses('AppController', 'Controller');
/**
 * Groups Controller
 *
 * @property Group $Group
 * @property PaginatorComponent $Paginator
 */
class GroupsController extends AppController {

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
		$this->Group->recursive = 0;
		$this->set('groups', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Group->exists($id)) {
			throw new NotFoundException(__('Invalid group'));
		}
		$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
		$this->set('group', $this->Group->find('first', $options));
               		
                $this->loadModel('DisciplineGroup');   
                $sql='SELECT `DisciplineGroup`.`id`, `DisciplineGroup`.`teacher_id`, `DisciplineGroup`.`discipline_id`, '
                        . '`DisciplineGroup`.`group_id`, `Teacher`.`id`, `Teacher`.`nome`, `Discipline`.`id`, '
                        . '`Discipline`.`nome` FROM `escolabd`.`discipline_groups` AS `DisciplineGroup` '
                        . 'LEFT JOIN `escolabd`.`teachers` AS `Teacher` ON (`DisciplineGroup`.`teacher_id` = `Teacher`.`id`) '
                        . 'LEFT JOIN `escolabd`.`disciplines` AS `Discipline` ON (`DisciplineGroup`.`discipline_id` = '
                        . '`Discipline`.`id`) where`DisciplineGroup`.`group_id` ='. $id.' ORDER BY `Discipline`.`nome` ASC';
                
                $disciplineGroups= $this->DisciplineGroup->query($sql);
                $this->set(compact('disciplineGroups'));
        }
        
        public function viewstudents($id = null) {
		if (!$this->Group->exists($id)) {
			throw new NotFoundException(__('Invalid group'));
		}
		$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
		$this->set('group', $this->Group->find('first', $options));
               	$this->loadModel('GroupStudent');
                $sqlGroupStudent='SELECT `GroupStudent`.`id`, `GroupStudent`.`group_id`, `GroupStudent`.`student_id`, '
                        . '`Student`.`id`, `Student`.`nome` FROM `escolabd`.`group_students` AS `GroupStudent` LEFT JOIN '
                        . '`escolabd`.`students` AS `Student` ON (`GroupStudent`.`student_id` = `Student`.`id`) '
                        . 'WHERE `GroupStudent`.`group_id` = '.$id.' ORDER BY `Student`.`nome` ASC';
                $groupStudents=$this->GroupStudent->query($sqlGroupStudent);
                $this->set(compact('groupStudents'));
        }

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Group->create();
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('The group has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.'));
			}
		}
		$courses = $this->Group->Course->find('list', array('fields'=>array('nome')));
		$this->set(compact('courses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Group->exists($id)) {
			throw new NotFoundException(__('Invalid group'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('The group has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
			$this->request->data = $this->Group->find('first', $options);
                        $dadosGroup=$this->request->data;
                        $this->set(compact('dadosGroup'));
		}
		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid group'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Group->delete()) {
			$this->Session->setFlash(__('The group has been deleted.'));
		} else {
			$this->Session->setFlash(__('The group could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
