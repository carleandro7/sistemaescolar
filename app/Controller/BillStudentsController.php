<?php
App::uses('AppController', 'Controller');
/**
 * BillStudents Controller
 *
 * @property BillStudent $BillStudent
 * @property PaginatorComponent $Paginator
 */
class BillStudentsController extends AppController {

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
		$this->BillStudent->recursive = 0;
		$this->set('billStudents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BillStudent->exists($id)) {
			throw new NotFoundException(__('Invalid bill student'));
		}
		$options = array('conditions' => array('BillStudent.' . $this->BillStudent->primaryKey => $id));
		$this->set('billStudent', $this->BillStudent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BillStudent->create();
			if ($this->BillStudent->save($this->request->data)) {
				$this->Session->setFlash(__('The bill student has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bill student could not be saved. Please, try again.'));
			}
		}
                $bills = $this->BillStudent->Bill->find('list', array('fields'=>array('id')));
		$disciplineStudents = $this->BillStudent->DisciplineStudent->find('list', array('fields'=>array('id')));
		$this->set(compact('disciplineStudents','bills'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BillStudent->exists($id)) {
			throw new NotFoundException(__('Invalid bill student'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BillStudent->save($this->request->data)) {
				$this->Session->setFlash(__('The bill student has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bill student could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BillStudent.' . $this->BillStudent->primaryKey => $id));
			$this->request->data = $this->BillStudent->find('first', $options);
		}
		$disciplineStudents = $this->BillStudent->DisciplineStudent->find('list');
		$this->set(compact('disciplineStudents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->BillStudent->id = $id;
		if (!$this->BillStudent->exists()) {
			throw new NotFoundException(__('Invalid bill student'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->BillStudent->delete()) {
			$this->Session->setFlash(__('The bill student has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bill student could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}