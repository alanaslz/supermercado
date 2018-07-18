<?php
App::uses('AppController', 'Controller');
/**
 * Estoques Controller
 *
 * @property Estoque $Estoque
 * @property PaginatorComponent $Paginator
 */
class EstoquesController extends AppController {

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
		$this->Estoque->recursive = 0;
		$this->set('estoques', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Estoque->exists($id)) {
			throw new NotFoundException(__('Invalid estoque'));
		}
		$options = array('conditions' => array('Estoque.' . $this->Estoque->primaryKey => $id));
		$this->set('estoque', $this->Estoque->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Estoque->create();
			if ($this->Estoque->save($this->request->data)) {
				$this->Session->setFlash(__('The estoque has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estoque could not be saved. Please, try again.'));
			}
		}
		$lojas = $this->Estoque->Loja->find('list');
		$produtos = $this->Estoque->Produto->find('list');
		$this->set(compact('lojas', 'produtos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Estoque->exists($id)) {
			throw new NotFoundException(__('Invalid estoque'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Estoque->save($this->request->data)) {
				$this->Session->setFlash(__('The estoque has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estoque could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Estoque.' . $this->Estoque->primaryKey => $id));
			$this->request->data = $this->Estoque->find('first', $options);
		}
		$lojas = $this->Estoque->Loja->find('list');
		$produtos = $this->Estoque->Produto->find('list');
		$this->set(compact('lojas', 'produtos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Estoque->id = $id;
		if (!$this->Estoque->exists()) {
			throw new NotFoundException(__('Invalid estoque'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Estoque->delete()) {
			$this->Session->setFlash(__('The estoque has been deleted.'));
		} else {
			$this->Session->setFlash(__('The estoque could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
