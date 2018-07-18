<?php
App::uses('AppController', 'Controller');
/**
 * ModuloOperacoes Controller
 *
 * @property ModuloOperacao $ModuloOperacao
 */
class ModuloOperacoesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
/*
		$this->ModuloOperacao->recursive = 0;
		$this->set('moduloOperacoes', $this->Paginator->paginate());
		
*/
		//$this->ModuloOperacao->recursive = 0;
		$this->set('moduloOperacoes',  $this->ModuloOperacao->find('all'));
		
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ModuloOperacao->exists($id)) {
			throw new NotFoundException(__('Invalid modulo operacao'));
		}
		$options = array('conditions' => array('ModuloOperacao.' . $this->ModuloOperacao->primaryKey => $id));
		$this->set('moduloOperacao', $this->ModuloOperacao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ModuloOperacao->create();
			if ($this->ModuloOperacao->save($this->request->data)) {
				$this->Session->setFlash(__('The modulo operacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modulo operacao could not be saved. Please, try again.'));
			}
		}
		$modulos = $this->ModuloOperacao->Modulo->find('list');
		$this->set(compact('modulos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ModuloOperacao->exists($id)) {
			throw new NotFoundException(__('Invalid modulo operacao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ModuloOperacao->save($this->request->data)) {
				$this->Session->setFlash(__('The modulo operacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modulo operacao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ModuloOperacao.' . $this->ModuloOperacao->primaryKey => $id));
			$this->request->data = $this->ModuloOperacao->find('first', $options);
		}
		$modulos = $this->ModuloOperacao->Modulo->find('list');
		$this->set(compact('modulos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ModuloOperacao->id = $id;
		if (!$this->ModuloOperacao->exists()) {
			throw new NotFoundException(__('Invalid modulo operacao'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ModuloOperacao->delete()) {
			$this->Session->setFlash(__('The modulo operacao has been deleted.'));
		} else {
			$this->Session->setFlash(__('The modulo operacao could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
