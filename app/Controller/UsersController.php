<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow('add'); // Permitindo que os usuários se registrem
        }

        public function login() {
          $this->layout='login_layout';
          if ($this->request->is('post')) {
              $this->Auth->logout();
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Email ou Senha incorreto!'));
            }
          }
        }

        public function logout() {
            $this->redirect($this->Auth->logout());
        }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}
       	public function indexadd() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
           $id= descriptografa($id);
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
                $schools = $this->User->School->find('list', array('fields'=>array('nome')));
		$this->set(compact('schools'));
	}

/**
 * add method
 *
 * @return void
 */
        function verificarADM(){
            if($this->Session->read('Auth.User.perfil')=='Administrador'){
                return true;
            }else{
                return false;
            }
        }
	public function add() {
            if($this->verificarADM()){
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'indexadd'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$schools = $this->User->School->find('list', array('fields'=>array('nome')));
		$this->set(compact('schools'));
            }  else {
                return $this->redirect(array('action' => 'index'));
            }
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
            
            if($this->verificarADM()){
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'indexadd'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$schools = $this->User->School->find('list', array('fields'=>array('nome')));
		$this->set(compact('schools'));
            }  else {
                return $this->redirect(array('action' => 'index'));
            }
	}
        public function altsenha($id = null) {
           
            if($this->verificarADM()){
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'indexadd'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$schools = $this->User->School->find('list', array('fields'=>array('nome')));
		$this->set(compact('schools'));
            }  else {
                return $this->redirect(array('action' => 'index'));
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
            if($this->verificarADM()){
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'indexadd'));
            }  else {
                return $this->redirect(array('action' => 'index'));
            }
	}
}
