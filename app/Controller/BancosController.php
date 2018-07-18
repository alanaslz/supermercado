<?php
App::uses('AppController', 'Controller');
/**
 * Bancos Controller
 *
 * @property Banco $Banco
 * @property PaginatorComponent $Paginator
 */
class BancosController extends AppController {

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
		$this->Banco->recursive = 0;
		$this->set('bancos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Banco->exists($id)) {
			throw new NotFoundException(__('Banco Inválido'));
		}
		$options = array('conditions' => array('Banco.' . $this->Banco->primaryKey => $id));
		$this->set('banco', $this->Banco->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Banco->create();
			if ($this->Banco->save($this->request->data)) {
				$this->Session->setFlash(__('O banco foi adicionado com sucesso!.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O banco não pôde ser adicionado. Tente Novamente!'));
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
		if (!$this->Banco->exists($id)) {
			throw new NotFoundException(__('Banco inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Banco->save($this->request->data)) {
				$this->Session->setFlash(__('O banco foi editado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O banco não pôde ser edutado. Tente Novamente!'));
			}
		} else {
			$options = array('conditions' => array('Banco.' . $this->Banco->primaryKey => $id));
			$this->request->data = $this->Banco->find('first', $options);
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
		$this->Banco->id = $id;
		if (!$this->Banco->exists()) {
			throw new NotFoundException(__('Banco Inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Banco->delete()) {
			$this->Session->setFlash(__('O banco foi deletado com sucesso!'));
		} else {
			$this->Session->setFlash(__('O Banco não pôde ser deletado. Tente Novamente!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
