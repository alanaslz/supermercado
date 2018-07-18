<?php
App::uses('AppController', 'Controller');
/**
 * Vinculos Controller
 *
 * @property Vinculo $Vinculo
 * @property PaginatorComponent $Paginator
 */
class VinculosController extends AppController {

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
		$this->Vinculo->recursive = 0;
		$this->set('vinculos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vinculo->exists($id)) {
			throw new NotFoundException(__('Vínculo Inválido'));
		}
		$options = array('conditions' => array('Vinculo.' . $this->Vinculo->primaryKey => $id));
		$this->set('vinculo', $this->Vinculo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vinculo->create();
			if ($this->Vinculo->save($this->request->data)) {
				$this->Session->setFlash(__('O Vínculo foi adicionado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Vínculo não pôde ser adicionado. Tente novamente!'));
			}
		}
		$empresas = $this->Vinculo->Empresa->find('list');
		$this->set(compact('empresas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Vinculo->exists($id)) {
			throw new NotFoundException(__('Vínculo Inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vinculo->save($this->request->data)) {
				$this->Session->setFlash(__('O Vínculo foi editado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Vínculo não pôde ser atualizado. Tente novamente!'));
			}
		} else {
			$options = array('conditions' => array('Vinculo.' . $this->Vinculo->primaryKey => $id));
			$this->request->data = $this->Vinculo->find('first', $options);
		}
		$empresas = $this->Vinculo->Empresa->find('list');
		$this->set(compact('empresas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Vinculo->id = $id;
		if (!$this->Vinculo->exists()) {
			throw new NotFoundException(__('Vínculo Inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Vinculo->delete()) {
			$this->Session->setFlash(__('O Vínculo foi deletado com sucesso!'));
		} else {
			$this->Session->setFlash(__('O Vínculo não pôde ser deletado. Tente novamente!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
