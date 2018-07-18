<?php
App::uses('AppController', 'Controller');
/**
 * Tdestinos Controller
 *
 * @property Tdestino $Tdestino
 * @property PaginatorComponent $Paginator
 */
class TdestinosController extends AppController {

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
		$this->Tdestino->recursive = 0;
		$this->set('tdestinos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tdestino->exists($id)) {
			throw new NotFoundException(__('Invalid tdestino'));
		}
		$options = array('conditions' => array('Tdestino.' . $this->Tdestino->primaryKey => $id));
		$this->set('tdestino', $this->Tdestino->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tdestino->create();
			if ($this->Tdestino->save($this->request->data)) {
				$this->Session->setFlash(__('The tdestino has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tdestino could not be saved. Please, try again.'));
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
		if (!$this->Tdestino->exists($id)) {
			throw new NotFoundException(__('Invalid tdestino'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tdestino->save($this->request->data)) {
				$this->Session->setFlash(__('The tdestino has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tdestino could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tdestino.' . $this->Tdestino->primaryKey => $id));
			$this->request->data = $this->Tdestino->find('first', $options);
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
		$this->Tdestino->id = $id;
		if (!$this->Tdestino->exists()) {
			throw new NotFoundException(__('Invalid tdestino'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tdestino->delete()) {
			$this->Session->setFlash(__('The tdestino has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tdestino could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
