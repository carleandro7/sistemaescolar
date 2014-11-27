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
       function verificaMatricula($idstudents, $idgroup){
            $sql='SELECT COUNT(`GroupStudents`.`id`)FROM `group_students` AS `GroupStudents` LEFT JOIN '
                    . '`students` as `Students` ON (`Students`.`id` = `GroupStudents`.`student_id`)  '
                    . 'WHERE `Students`.`id` = '.$idstudents.' AND `GroupStudents`.`group_id` = '.$idgroup;
            $resultado=$this->GroupStudent->query($sql);
            if($resultado[0][0]['COUNT(`GroupStudents`.`id`)'] == 0){
                return true;
            }else{
                return false;
            }
            
        }
        function salvar(){
            if ($this->GroupStudent->save($this->request->data)) {
                            	$this->Session->setFlash(__('The group student has been saved.'));
				return $this->redirect(array('controller' => 'groups', 'action' => 'viewstudents', $this->request->data('GroupStudent.group_id')));
                } else {
				$this->Session->setFlash(__('The group student could not be saved. Please, try again.'));
		}
        }

        public function add($id = null) {
		if ($this->request->is('post')) {
                    if($this->verificaMatricula($this->request->data('GroupStudent.student_id'),$this->request->data('GroupStudent.group_id'))){
                  	$this->GroupStudent->create();
			$this->salvar();
                    }else{
                	$this->Session->setFlash(__('Aluno já está matriculado nessa Turma.'));
                    }
		}
                $options = array('fields'=>array('nome'),'conditions' => array('Group.id' => $id));
		$groups = $this->GroupStudent->Group->find('list', $options);
       		$students = $this->GroupStudent->Student->find('list', array('fields'=>array('nome')));
		$this->set(compact('groups', 'students'));
	}
        public function addstudents() {
		if ($this->request->is('post')) {                                 
                    if($this->verificaMatricula($this->request->data('GroupStudent.student_id'),$this->request->data('GroupStudent.group_id'))){
                  	$this->GroupStudent->create();
			$this->salvar();
                    }else{
                       	$this->Session->setFlash(__('Aluno já está matriculado nessa Turma.'));
                    }
		}
		$groups = $this->GroupStudent->Group->find('list', array('fields'=>array('nome')));
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
                
                    $this->request->allowMethod('post', 'delete');
                    if ($this->GroupStudent->delete()) {
                            $this->Session->setFlash(__('The group student has been deleted.'));
                    } else {
                            $this->Session->setFlash(__('The group student could not be deleted. Please, try again.'));
                    }
                    return $this->redirect(array('controller' => 'groups', 'action' => 'viewstudents', $idgroup));                
	}
        
        public function groupsview($id = null){
            if ($id == null) {
			throw new NotFoundException(__('Invalid student'));
		}
               $this->GroupStudent->recursive = 0;
               $this->Paginator->settings = array(
                'conditions' => array('`GroupStudent`.`student_id` = ' => $id),
                'order' => ' `GroupStudent`.`id` DESC', 
                'limit' => 20
                );
                $groupStudents  = $this->Paginator->paginate('GroupStudent');
                $this->set(compact('groupStudents'));
        }
        
       
        
}
