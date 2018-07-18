<?php
App::uses('AppController', 'Controller');
/**
 * Transportes Controller
 *
 * @property Transporte $Transporte
 * @property PaginatorComponent $Paginator
 */
class TransportesController extends AppController {

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
		$this->Transporte->recursive = 0;
		$this->set('transportes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Transporte->exists($id)) {
			throw new NotFoundException(__('Meio de Transporte Inválido'));
		}
		$options = array('conditions' => array('Transporte.' . $this->Transporte->primaryKey => $id));
		$this->set('transporte', $this->Transporte->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Transporte->create();
			if ($this->Transporte->save($this->request->data)) {
				$this->Session->setFlash(__('O meio de transporte foi adicionado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O meio de transporte não pôde ser adicionado. Tente novamente!'));
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
		if (!$this->Transporte->exists($id)) {
			throw new NotFoundException(__('Meio de transporte inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Transporte->save($this->request->data)) {
				$this->Session->setFlash(__('O transporte foi atualizado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O meio de transporte não pôde ser atualizado. Tente Novamente!'));
			}
		} else {
			$options = array('conditions' => array('Transporte.' . $this->Transporte->primaryKey => $id));
			$this->request->data = $this->Transporte->find('first', $options);
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
		$this->Transporte->id = $id;
		if (!$this->Transporte->exists()) {
			throw new NotFoundException(__('Meio de Transporte Inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Transporte->delete()) {
			$this->Session->setFlash(__('O meio de transporte foi deletado com sucesso'));
		} else {
			$this->Session->setFlash(__('O meio de transporte não pôde ser deletado. Tente novamente!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
