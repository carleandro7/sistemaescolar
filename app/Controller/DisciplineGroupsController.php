<?php
App::uses('AppController', 'Controller');
/**
 * DisciplineGroups Controller
 *
 * @property DisciplineGroup $DisciplineGroup
 * @property PaginatorComponent $Paginator
 */
class DisciplineGroupsController extends AppController {

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
		$this->DisciplineGroup->recursive = 0;
		$this->set('disciplineGroups', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DisciplineGroup->exists($id)) {
			throw new NotFoundException(__('Invalid discipline group'));
		}
		$options = array('conditions' => array('DisciplineGroup.' . $this->DisciplineGroup->primaryKey => $id));
		$this->set('disciplineGroup', $this->DisciplineGroup->find('first', $options));
                $this->loadModel('Schedules');
                $sql='SELECT `Schedules`.`id`,`Schedules`.`dia`,`Schedules`.`inicio`,`Schedules`.`fim`, `Schedules`.`discipline_groups_id`,`DisciplineGroups`.`id` FROM `escolabd`.`schedules` AS `Schedules` LEFT JOIN `escolabd`.`discipline_groups` AS `DisciplineGroups` ON (`Schedules`.`discipline_groups_id` = `DisciplineGroups`.`id`) where `DisciplineGroups`.`id`='.$id;
                $schedules=$this->Schedules->query($sql);
                $this->set(compact('schedules'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DisciplineGroup->create();
			if ($this->DisciplineGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The discipline group has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discipline group could not be saved. Please, try again.'));
			}
		}
		$teachers = $this->DisciplineGroup->Teacher->find('list');
		$disciplines = $this->DisciplineGroup->Discipline->find('list');
		$groups = $this->DisciplineGroup->Group->find('list');
		$this->set(compact('teachers', 'disciplines', 'groups'));
	}
        public function addgroup($id=null, $idgroup=null) {
		if ($this->request->is('post')) {
			$this->DisciplineGroup->create();
			if ($this->DisciplineGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The discipline group has been saved.'));
                                return $this->redirect(array('controller' => 'groups', 'action' => 'view', $idgroup));
			} else {
				$this->Session->setFlash(__('The discipline group could not be saved. Please, try again.'));
			}
		}
		$teachers = $this->DisciplineGroup->Teacher->find('list',  array('fields'=>array('nome')));
                $options = array('fields'=>array('nome'),'conditions' => array('Discipline.course_id' => $id));
		$disciplines = $this->DisciplineGroup->Discipline->find('list', $options);
		$this->set('idgroup',$idgroup);
                $options = array('fields'=>array('discipline_id'),'conditions' => array('DisciplineGroup.group_id' => $idgroup));
                $disciplineGroups = $this->DisciplineGroup->find('list',$options);
		$this->set(compact('teachers', 'disciplines','disciplineGroups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null,  $idgroup=null) {
		if (!$this->DisciplineGroup->exists($id)) {
			throw new NotFoundException(__('Invalid discipline group'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DisciplineGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The discipline group has been saved.'));
                                if (!empty($idgroup)) {
                                    return $this->redirect(array('controller' => 'groups', 'action' => 'view', $idgroup));
                                } else {
                                        return $this->redirect(array('action' => 'view',$id));
                                }
                        } else {
				$this->Session->setFlash(__('The discipline group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DisciplineGroup.' . $this->DisciplineGroup->primaryKey => $id));
			$this->request->data = $this->DisciplineGroup->find('first', $options);
                        $dadosDisciplineGroups =$this->request->data;
		}
		$teachers = $this->DisciplineGroup->Teacher->find('list',array('fields'=>array('nome')));
		$this->set(compact('teachers', 'dadosDisciplineGroups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DisciplineGroup->id = $id;
		if (!$this->DisciplineGroup->exists()) {
			throw new NotFoundException(__('Invalid discipline group'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DisciplineGroup->delete()) {
			$this->Session->setFlash(__('The discipline group has been deleted.'));
		} else {
			$this->Session->setFlash(__('The discipline group could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
