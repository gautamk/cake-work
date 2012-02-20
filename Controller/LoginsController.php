<?php
App::uses('AppController', 'Controller');
/**
 * Logins Controller
 *
 * @property Login $Login
 */
class LoginsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Login->recursive = 0;
		$this->set('logins', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Login->id = $id;
		if (!$this->Login->exists()) {
			throw new NotFoundException(__('Invalid login'));
		}
		$this->set('login', $this->Login->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Login->create();
			if ($this->Login->save($this->request->data)) {
				$this->Session->setFlash(__('The login has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The login could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Login->id = $id;
		if (!$this->Login->exists()) {
			throw new NotFoundException(__('Invalid login'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Login->save($this->request->data)) {
				$this->Session->setFlash(__('The login has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The login could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Login->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Login->id = $id;
		if (!$this->Login->exists()) {
			throw new NotFoundException(__('Invalid login'));
		}
		if ($this->Login->delete()) {
			$this->Session->setFlash(__('Login deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Login was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Login->recursive = 0;
		$this->set('logins', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Login->id = $id;
		if (!$this->Login->exists()) {
			throw new NotFoundException(__('Invalid login'));
		}
		$this->set('login', $this->Login->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Login->create();

			//Auto sha1 Hashing
			$this->request->data['Login']['password'] = sha1($this->request->data['Login']['password']);

			if ($this->Login->save($this->request->data)) {
				$this->Session->setFlash(__('The login has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The login could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Login->id = $id;
		if (!$this->Login->exists()) {
			throw new NotFoundException(__('Invalid login'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			//Auto sha1 Hashing
			$this->request->data['Login']['password'] = sha1($this->request->data['Login']['password']);

			if ($this->Login->save($this->request->data)) {
				$this->Session->setFlash(__('The login has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The login could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Login->read(null, $id);
		}
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Login->id = $id;
		if (!$this->Login->exists()) {
			throw new NotFoundException(__('Invalid login'));
		}
		if ($this->Login->delete()) {
			$this->Session->setFlash(__('Login deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Login was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
