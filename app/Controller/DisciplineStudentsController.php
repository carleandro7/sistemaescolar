<?php
App::uses('AppController', 'Controller');
/**
 * DisciplineStudents Controller
 *
 * @property DisciplineStudent $DisciplineStudent
 * @property PaginatorComponent $Paginator
 */
class DisciplineStudentsController extends AppController {

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
		$this->DisciplineStudent->recursive = 0;
                
		$this->set('disciplineStudents', $this->Paginator->paginate());
      	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DisciplineStudent->exists($id)) {
			throw new NotFoundException(__('Invalid discipline student'));
		}
		$options = array('conditions' => array('DisciplineStudent.' . $this->DisciplineStudent->primaryKey => $id));
		$this->set('disciplineStudent', $this->DisciplineStudent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
        function verificarMatriculaDisc($idStudents,$idDisciplines){
            $sql='SELECT COUNT(`DisciplineStudents`.`id`) FROM `discipline_students` AS `DisciplineStudents` left '
                .'join `students`  as `Students` ON (`Students`.`id` = `DisciplineStudents`.`students_id`) WHERE'
                .' `Students`.`id`= '.$idStudents.' AND `DisciplineStudents`.`discipline_groups_id`= '.$idDisciplines;
            $resultado=$this->DisciplineStudent->query($sql);
                  if($resultado[0][0]['COUNT(`DisciplineStudents`.`id`)'] == 0){
                return true;
            }else{
                return false;
            }
            
        }
	public function add() {
		if ($this->request->is('post')) {
                    if($this->verificarMatriculaDisc($this->request->data('DisciplineStudent.students_id'),$this->request->data('DisciplineStudent.discipline_groups_id'))){
			$this->DisciplineStudent->create();
			if ($this->DisciplineStudent->save($this->request->data)) {
				$this->Session->setFlash(__('The discipline student has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discipline student could not be saved. Please, try again.'));
			}
                    }else{
                       	$this->Session->setFlash(__('Aluno já está matriculado nessa Disciplina.'));
                    }
		}

		$disciplineGroups = $this->DisciplineStudent->DisciplineGroups->query('SELECT `DisciplineGroups`.`id`, `DisciplineGroups`.`discipline_id`, `Disciplines`.`nome` FROM `discipline_groups` AS `DisciplineGroups`left join `disciplines`  as `Disciplines` ON (`DisciplineGroups`.`discipline_id` = `Disciplines`.`id`)');
		$students = $this->DisciplineStudent->Students->find('list', array('fields'=>array('nome')));
		$this->set(compact('disciplineGroups', 'students'));
                
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DisciplineStudent->exists($id)) {
			throw new NotFoundException(__('Invalid discipline student'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DisciplineStudent->save($this->request->data)) {
				$this->Session->setFlash(__('The discipline student has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discipline student could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DisciplineStudent.' . $this->DisciplineStudent->primaryKey => $id));
			$this->request->data = $this->DisciplineStudent->find('first', $options);
		}
		$disciplineGroups = $this->DisciplineStudent->DisciplineGroup->find('list');
		$students = $this->DisciplineStudent->Student->find('list');
		$this->set(compact('disciplineGroups', 'students'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DisciplineStudent->id = $id;
		if (!$this->DisciplineStudent->exists()) {
			throw new NotFoundException(__('Invalid discipline student'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DisciplineStudent->delete()) {
			$this->Session->setFlash(__('The discipline student has been deleted.'));
		} else {
			$this->Session->setFlash(__('The discipline student could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function disciplines($id = null) {
            if ($id == null) {
			throw new NotFoundException(__('Invalid student'));
		}
               $this->DisciplineStudent->recursive = 0;
               $this->Paginator->settings = array(
                'conditions' => array('`Students`.`id` = ' => $id),
                'order' => ' `DisciplineStudent`.`id` DESC', 
                'limit' => 20
                );
                $disciplinas  = $this->Paginator->paginate('DisciplineStudent');
                $this->set(compact('disciplinas'));
	}
        public function disciplinegroups($id = null, $idg = null){
            if ($id == null || $idg == null) {
			throw new NotFoundException(__('Invalid student'));
            }
            $this->DisciplineStudent->recursive = 0;
               $this->Paginator->settings = array(
                'conditions' => array('AND'=>array('`Students`.`id` = ' => $id, '`DisciplineGroups`.`group_id` = ' => $idg)),
                'order' => ' `DisciplineStudent`.`id` DESC', 
                'limit' => 20
                );
                $disciplinas  = $this->Paginator->paginate('DisciplineStudent');
                $this->set(compact('disciplinas'));
        }
}
