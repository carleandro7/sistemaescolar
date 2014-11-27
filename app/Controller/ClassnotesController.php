<?php
App::uses('AppController', 'Controller');
/**
 * Classnotes Controller
 *
 * @property Classnote $Classnote
 * @property PaginatorComponent $Paginator
 */
class ClassnotesController extends AppController {

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
		$this->Classnote->recursive = 0;
		$options = array('conditions' => array('Classnote.discipline_group_id' => $id));
                $this->paginate = $options;
                $this->set('id',$id);
                $this->set('classnotes', $this->Paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Classnote->exists($id)) {
			throw new NotFoundException(__('Invalid classnote'));
		}
		$options = array('conditions' => array('Classnote.' . $this->Classnote->primaryKey => $id));
		$this->set('classnote', $this->Classnote->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idgroup = null) {
		if ($this->request->is('post')) {
			$this->Classnote->create();
			if ($this->Classnote->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The classnote has been saved.'));
				return $this->redirect(array('action' => 'index',$this->request->data['Classnote']['discipline_group_id']));
			} else {
				$this->Session->setFlash(__('The classnote could not be saved. Please, try again.'));
			}
		}
		
                $this->loadModel('DisciplineStudent');
                $options = array('conditions' => array('DisciplineGroup.id' => $idgroup));
		$disciplineGroups = $this->Classnote->DisciplineGroup->find('list', $options);
                $sql = 'SELECT `DisciplineStudent`.`id`, `DisciplineStudent`.`discipline_groups_id`, `DisciplineStudent`.`students_id`,'
                        . ' `DisciplineGroups`.`id`, `DisciplineGroups`.`teacher_id`, `DisciplineGroups`.`discipline_id`, '
                        . '`DisciplineGroups`.`group_id`, `Students`.`id`, `Students`.`nome` FROM `discipline_students` AS `DisciplineStudent` '
                        . 'LEFT JOIN `discipline_groups` AS `DisciplineGroups` ON (`DisciplineStudent`.`discipline_groups_id` = '
                        . '`DisciplineGroups`.`id`) LEFT JOIN `students` AS `Students` ON (`DisciplineStudent`.`students_id` = `Students`.`id`) '
                        . 'WHERE `DisciplineGroups`.`id` = '.$idgroup.' ORDER BY `Students`.`nome` ASC';
                $frequencys  = $this->DisciplineStudent->query($sql);
		$this->set(compact('disciplineGroups', 'frequencys'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Classnote->exists($id)) {
			throw new NotFoundException(__('Invalid classnote'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Classnote->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The classnote has been saved.'));
				return $this->redirect(array('action' => 'index',$this->request->data['Classnote']['discipline_group_id']));
			} else {
				$this->Session->setFlash(__('The classnote could not be saved. Please, try again.'));
			}
		} else {
                        $options = array('conditions' => array('Classnote.' . $this->Classnote->primaryKey => $id));
		$this->request->data = $this->Classnote->find('first', $options);
                $iddisciplinegroups= $this->request->data['Classnote']['discipline_group_id'];
                $sql = 'SELECT `Frequency`.`id`,`Frequency`.`falta`,`Frequency`.`discipline_student_id`, `DisciplineStudent`.`id`, '
                        . '`DisciplineStudent`.`discipline_groups_id`, `DisciplineStudent`.`students_id`, `DisciplineGroups`.`id`, '
                        . '`DisciplineGroups`.`teacher_id`, `DisciplineGroups`.`discipline_id`, `DisciplineGroups`.`group_id`, '
                        . '`Students`.`id`, `Students`.`nome` FROM `discipline_students` AS `DisciplineStudent` LEFT JOIN '
                        . '`discipline_groups` AS `DisciplineGroups` ON (`DisciplineStudent`.`discipline_groups_id` = `DisciplineGroups`.`id`) '
                        . 'LEFT JOIN `students` AS `Students` ON (`DisciplineStudent`.`students_id` = `Students`.`id`) '
                        . 'LEFT JOIN `frequencies` AS `Frequency` ON (`DisciplineStudent`.`id` = `Frequency`.`discipline_student_id` and '
                        . '`Frequency`.`classnote_id` = '.$id.') '
                        . 'WHERE `DisciplineGroups`.`id` = '.$iddisciplinegroups.' ORDER BY `Students`.`nome` ASC';
                $frequencys  = $this->Classnote->Frequency->query($sql);
		$this->set(compact('disciplineGroups', 'frequencys'));
		}
		
		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $idclassnote=null) {
		$this->Classnote->id = $id;
		if (!$this->Classnote->exists()) {
			throw new NotFoundException(__('Invalid classnote'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Classnote->delete()) {
			return $this->redirect(array('action' => 'index',$idclassnote));
		} else {
			$this->Session->setFlash(__('The classnote could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
