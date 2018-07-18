<?php
App::uses('AppController', 'Controller');
/**
 * Testes Controller
 *
 * @property Testes $Testes
 * @property PaginatorComponent $Paginator
 */
class TestesController extends AppController {

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
		$this->Testes->recursive = 0;
		$this->set('testes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Testes->exists($id)) {
			throw new NotFoundException(__('Invalid testes'));
		}
		$options = array('conditions' => array('Testes.' . $this->Testes->primaryKey => $id));
		$this->set('testes', $this->Testes->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Testes->create();
			if ($this->Testes->save($this->request->data)) {
				$this->Session->setFlash(__('The testes has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The testes could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Testes->Usuario->find('list');
		$parentTesteses = $this->Testes->ParentTeste->find('list');
		$this->set(compact('usuarios', 'parentTesteses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Testes->exists($id)) {
			throw new NotFoundException(__('Invalid testes'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Testes->save($this->request->data)) {
				$this->Session->setFlash(__('The testes has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The testes could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Testes.' . $this->Testes->primaryKey => $id));
			$this->request->data = $this->Testes->find('first', $options);
		}
		$usuarios = $this->Testes->Usuario->find('list');
		$parentTesteses = $this->Testes->ParentTeste->find('list');
		$this->set(compact('usuarios', 'parentTesteses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Testes->id = $id;
		if (!$this->Testes->exists()) {
			throw new NotFoundException(__('Invalid testes'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Testes->delete()) {
			$this->Session->setFlash(__('The testes has been deleted.'));
		} else {
			$this->Session->setFlash(__('The testes could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
