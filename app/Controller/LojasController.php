<?php
App::uses('AppController', 'Controller');
/**
 * Lojas Controller
 *
 * @property Loja $Loja
 * @property PaginatorComponent $Paginator
 */
class LojasController extends AppController {

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
		$this->Loja->recursive = 0;
		$this->set('lojas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Loja->exists($id)) {
			throw new NotFoundException(__('Invalid loja'));
		}
		$options = array('conditions' => array('Loja.' . $this->Loja->primaryKey => $id));
		$this->set('loja', $this->Loja->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Loja->create();
			if ($this->Loja->save($this->request->data)) {
				$this->Session->setFlash(__('The loja has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loja could not be saved. Please, try again.'));
			}
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
		if (!$this->Loja->exists($id)) {
			throw new NotFoundException(__('Invalid loja'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Loja->save($this->request->data)) {
				$this->Session->setFlash(__('The loja has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loja could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Loja.' . $this->Loja->primaryKey => $id));
			$this->request->data = $this->Loja->find('first', $options);
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
		$this->Loja->id = $id;
		if (!$this->Loja->exists()) {
			throw new NotFoundException(__('Invalid loja'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Loja->delete()) {
			$this->Session->setFlash(__('The loja has been deleted.'));
		} else {
			$this->Session->setFlash(__('The loja could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
