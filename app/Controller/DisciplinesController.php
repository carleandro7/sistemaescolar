<?php
App::uses('AppController', 'Controller');
/**
 * Disciplines Controller
 *
 * @property Discipline $Discipline
 * @property PaginatorComponent $Paginator
 */
class DisciplinesController extends AppController {

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
		$this->Discipline->recursive = 0;
		$this->set('disciplines', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Discipline->exists($id)) {
			throw new NotFoundException(__('Invalid discipline'));
		}
		$options = array('conditions' => array('Discipline.' . $this->Discipline->primaryKey => $id));
		$this->set('discipline', $this->Discipline->find('first', $options));
                $courses = $this->Discipline->Course->find('list', array('fields'=>array('nome')));
		$this->set(compact('courses'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Discipline->create();
			if ($this->Discipline->save($this->request->data)) {
				$this->Session->setFlash(__('The discipline has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discipline could not be saved. Please, try again.'));
			}
		}
		$courses = $this->Discipline->Course->find('list', array('fields'=>array('nome')));
		$this->set(compact('courses'));
	}
        public function addcourse($id = null) {
            if ($this->request->is('post')) {
			$this->Discipline->create();
			if ($this->Discipline->save($this->request->data)) {
				$this->Session->setFlash(__('The discipline has been saved.'));
				return $this->redirect(array('controller' => 'courses', 'action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('The discipline could not be saved. Please, try again.'));
			}
		}
                
                    $courses = $this->Discipline->Course->find('list', array('fields'=>array('nome')));
                    $this->set(compact('courses'));
                    if($id != null){
                        $this->set('idcourse', $id);
                    }
        }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null, $idcourse = null) {
		if (!$this->Discipline->exists($id)) {
			throw new NotFoundException(__('Invalid discipline'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Discipline->save($this->request->data)) {
				$this->Session->setFlash(__('The discipline has been saved.'));
                                if(!empty($idcourse)){
                                    return $this->redirect(array('controller' => 'courses', 'action' => 'view', $idcourse));
                                }else{
                                    return $this->redirect(array('action' => 'index'));
                                }
			} else {
				$this->Session->setFlash(__('The discipline could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Discipline.' . $this->Discipline->primaryKey => $id));
			$this->request->data = $this->Discipline->find('first', $options);
                        $dadosDisciplines = $this->request->data;
		}
		$this->set(compact('dadosDisciplines'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Discipline->id = $id;
		if (!$this->Discipline->exists()) {
			throw new NotFoundException(__('Invalid discipline'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Discipline->delete()) {
			$this->Session->setFlash(__('The discipline has been deleted.'));
		} else {
			$this->Session->setFlash(__('The discipline could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
