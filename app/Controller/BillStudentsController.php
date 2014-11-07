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
       
        
         public function viewnotas($id = null) {
            if ($id== null) {
			throw new NotFoundException(__('Invalid bill student'));
            }
                $this->loadModel("Student");
                $sql = "SELECT  `Student`.`nome` FROM `escolabd`.`discipline_students` AS `DisciplineStudent` "
                        . "LEFT JOIN `escolabd`.`students` AS `Student` ON (`DisciplineStudent`.`students_id` = "
                        . "`Student`.`id`) WHERE `DisciplineStudent`.`id` = ".$id;
                $student = $this->Student->query($sql);
                $this->loadModel("Discipline");
                $sql = "SELECT `DisciplineStudent`.`id`, `Discipline`.`nome`, `Group`.`nome` FROM `escolabd`.`discipline_students` AS "
                        . "`DisciplineStudent` LEFT JOIN `escolabd`.`discipline_groups` AS `DisciplineGroup` ON "
                        . "(`DisciplineGroup`.`id` = `DisciplineStudent`.`discipline_groups_id`) "
                        . "LEFT JOIN `escolabd`.`groups` AS `Group` ON (`DisciplineGroup`.`group_id` = `group`.`id`) "
                        . "LEFT JOIN `escolabd`.`disciplines` AS `Discipline` ON (`Discipline`.`id` = "
                        . "`DisciplineGroup`.`discipline_id`) WHERE `DisciplineStudent`.`id` = ".$id;
                $discipline = $this->Discipline->query($sql); 
                $this->loadModel('Frequency');
                $sql = "SELECT SUM(`Frequency`.`falta`) FROM `escolabd`.`frequencies` AS `Frequency` LEFT JOIN "
                        . "`escolabd`.`discipline_students` AS `DisciplineStudent` ON (`Frequency`.`discipline_student_id` "
                        . "= `DisciplineStudent`.`id`) WHERE `Frequency`.`discipline_student_id` = ".$id;
                $frequency = $this->Frequency->query($sql); 
                $this->loadModel('Classnote');
                $sql = "SELECT SUM(`Classnote`.`qtdaula`) FROM `classnotes` as `Classnote`  LEFT JOIN `discipline_groups` AS "
                        . "`DisciplineGroup` ON (`Classnote`.`discipline_group_id` = `DisciplineGroup`.`id`) "
                        . "WHERE `Classnote`.`discipline_group_id` = (Select `DisciplineStudent`.`discipline_groups_id`from "
                        . "`discipline_students` as `DisciplineStudent` where `DisciplineStudent`.`id` =".$id.")";
                $classnote = $this->Classnote->query($sql); 
                $this->set(compact('student', 'discipline', 'frequency', 'classnote'));
                
		$options = array('conditions' => array('BillStudent.discipline_student_id' => $id), 'order' => ' `BillStudent`.`id` ASC', );
		$this->set('billStudents', $this->BillStudent->find('all', $options));
                $options2 = array('conditions' => array('BillStudent.discipline_student_id' => $id), "fields" => array(" AVG(`BillStudent`.`nota`)"));
                $this->set('mediapoderada', $this->BillStudent->find('all', $options2));
	}
        public function view_disciplina_pdf($id = null) {
            if ($id== null) {
			throw new NotFoundException(__('Invalid bill student'));
            }
                ini_set('memory_limit', '512M');
                $this->loadModel("Student");
                $sql = "SELECT  `Student`.`nome` FROM `escolabd`.`discipline_students` AS `DisciplineStudent` "
                        . "LEFT JOIN `escolabd`.`students` AS `Student` ON (`DisciplineStudent`.`students_id` = "
                        . "`Student`.`id`) WHERE `DisciplineStudent`.`id` = ".$id;
                $student = $this->Student->query($sql);
                $this->loadModel("Discipline");
                $sql = "SELECT `Discipline`.`nome`, `Group`.`nome`,`Group`.`ano`,`Group`.`nivel`,`Group`.`turno` FROM `escolabd`.`discipline_students` AS "
                        . "`DisciplineStudent` LEFT JOIN `escolabd`.`discipline_groups` AS `DisciplineGroup` ON "
                        . "(`DisciplineGroup`.`id` = `DisciplineStudent`.`discipline_groups_id`) "
                        . "LEFT JOIN `escolabd`.`groups` AS `Group` ON (`DisciplineGroup`.`group_id` = `group`.`id`) "
                        . "LEFT JOIN `escolabd`.`disciplines` AS `Discipline` ON (`Discipline`.`id` = "
                        . "`DisciplineGroup`.`discipline_id`) WHERE `DisciplineStudent`.`id` = ".$id;
                $discipline = $this->Discipline->query($sql); 
                $this->loadModel('Frequency');
                $sql = "SELECT SUM(`Frequency`.`falta`) FROM `escolabd`.`frequencies` AS `Frequency` LEFT JOIN "
                        . "`escolabd`.`discipline_students` AS `DisciplineStudent` ON (`Frequency`.`discipline_student_id` "
                        . "= `DisciplineStudent`.`id`) WHERE `Frequency`.`discipline_student_id` = ".$id;
                $frequency = $this->Frequency->query($sql); 
                $this->loadModel('Classnote');
                $sql = "SELECT SUM(`Classnote`.`qtdaula`) FROM `classnotes` as `Classnote`  LEFT JOIN `discipline_groups` AS "
                        . "`DisciplineGroup` ON (`Classnote`.`discipline_group_id` = `DisciplineGroup`.`id`) "
                        . "WHERE `Classnote`.`discipline_group_id` = (Select `DisciplineStudent`.`discipline_groups_id`from "
                        . "`discipline_students` as `DisciplineStudent` where `DisciplineStudent`.`id` =".$id.")";
                $classnote = $this->Classnote->query($sql); 
                $this->set(compact('student', 'discipline', 'frequency', 'classnote'));
                
		$options = array('conditions' => array('BillStudent.discipline_student_id' => $id), 'order' => ' `BillStudent`.`id` ASC' );
		$this->set('billStudents', $this->BillStudent->find('all', $options));
                $options2 = array('conditions' => array('BillStudent.discipline_student_id' => $id), "fields" => array(" AVG(`BillStudent`.`nota`)"));
                $this->set('mediapoderada', $this->BillStudent->find('all', $options2));
            
	}
        
        public function view_turma_pdf($ids = null, $idg = null){
            if ($ids== null || $idg== null) {
			throw new NotFoundException(__('Invalid bill student'));
            }
            ini_set('memory_limit', '512M');
            $this->loadModel('DisciplineStudent');
            $sql = "SELECT `DisciplineStudent`.`id`,`Discipline`.`nome`, `Group`.`nome`,`Group`.`ano`,`Group`.`nivel`,`Group`.`turno`, "
                    . "`Group`.`id`, (SELECT SUM(`Frequency`.`falta`) FROM `escolabd`.`frequencies` AS `Frequency` WHERE "
                    . "`Frequency`.`discipline_student_id` = `DisciplineStudent`.`id` ) as `frequencias`,(SELECT SUM(`Classnote`.`qtdaula`)"
                    . " FROM `classnotes` as `Classnote` LEFT JOIN `discipline_groups` AS `DisciplineGroup` ON (`Classnote`.`discipline_group_id`"
                    . " = `DisciplineGroup`.`id`) WHERE `DisciplineGroup`.`id` =  `DisciplineStudent`.`discipline_groups_id`) as `qtdaula`,"
                    . "(SELECT AVG(`BillStudent`.`nota`) FROM `bill_students` AS `BillStudent` LEFT JOIN `bills` AS `Bill` ON (`BillStudent`.`bill_id`"
                    . " = `Bill`.`id`)  WHERE `BillStudent`.`discipline_student_id` = `DisciplineStudent`.`id`) as `media` FROM `discipline_students` AS `DisciplineStudent` "
                    . "LEFT JOIN `discipline_groups` AS `DisciplineGroup` ON (`DisciplineGroup`.`id` = `DisciplineStudent`.`discipline_groups_id`) LEFT JOIN "
                    . "`groups` AS `Group` ON (`DisciplineGroup`.`group_id` = `group`.`id`) LEFT JOIN `disciplines` AS `Discipline` ON (`Discipline`.`id` = "
                    . "`DisciplineGroup`.`discipline_id`) WHERE `DisciplineStudent`.`students_id` = ".$ids." AND `DisciplineGroup`.`group_id` = ".$idg;
            $disciplineStudents = $this->DisciplineStudent->query($sql); 
            
            $condicao ='';
            $len = count($disciplineStudents);    
            $i=0;
            foreach ($disciplineStudents as $disciplineStudent):
                $condicao .= "`BillStudent.discipline_student_id` =". $disciplineStudent['DisciplineStudent']['id'];
                $i++;
                if($i<$len){
                    $condicao .=" OR ";
                }
            endforeach;
            $options = array('conditions' => array($condicao), 'order' => ' `BillStudent`.`id` ASC');
            $classnotes = $this->BillStudent->find('all', $options);
            $this->set(compact('disciplineStudents', 'classnotes'));
        }
}
