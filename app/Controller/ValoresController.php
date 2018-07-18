<?php
App::uses('AppController', 'Controller');
/**
 * Valores Controller
 *
 * @property Valor $Valor
 * @property PaginatorComponent $Paginator
 */
class ValoresController extends AppController {

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
		$this->Valor->recursive = 0;
		$this->set('valores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Valor->exists($id)) {
			throw new NotFoundException(__('Invalid valor'));
		}
		$options = array('conditions' => array('Valor.' . $this->Valor->primaryKey => $id));
		$this->set('valor', $this->Valor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Valor->create();
			if ($this->Valor->save($this->request->data)) {
				$this->Session->setFlash(__('The valor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valor could not be saved. Please, try again.'));
			}
		}
		$tdestinos = $this->Valor->Tdestino->find('list');
		$escolaridades = $this->Valor->Escolaridade	->find('list');
	 
		$grupos = $this->Valor->Grupo->find('list');
		$this->set(compact('tdestinos', 'grupos','escolaridades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Valor->exists($id)) {
			throw new NotFoundException(__('Invalid valor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Valor->save($this->request->data)) {
				$this->Session->setFlash(__('The valor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Valor.' . $this->Valor->primaryKey => $id));
			$this->request->data = $this->Valor->find('first', $options);
		}
		$tdestinos = $this->Valor->Tdestino->find('list');
		$grupos = $this->Valor->Grupo->find('list');
		$escolaridades = $this->Valor->Escolaridade	->find('list');
		
		$this->set(compact('tdestinos', 'grupos','escolaridades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Valor->id = $id;
		if (!$this->Valor->exists()) {
			throw new NotFoundException(__('Invalid valor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Valor->delete()) {
			$this->Session->setFlash(__('The valor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The valor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
