<?php
App::uses('AppController', 'Controller');
/**
 * Planos Controller
 *
 * @property Plano $Plano
 * @property PaginatorComponent $Paginator
 */
class PlanosController extends AppController {

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
		$this->Plano->recursive = 0;
		$this->set('planos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Plano->exists($id)) {
			throw new NotFoundException(__('Plano Interno Inválido'));
		}
		$options = array('conditions' => array('Plano.' . $this->Plano->primaryKey => $id));
		$this->set('plano', $this->Plano->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Plano->create();
			if ($this->Plano->save($this->request->data)) {
				$this->Session->setFlash(__('O Plano Interno foi adicionado com successo!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Plano Interno não pôde ser adicionado. Tente Novamente!'));
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
		if (!$this->Plano->exists($id)) {
			throw new NotFoundException(__('Plano Interno Inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plano->save($this->request->data)) {
				$this->Session->setFlash(__('O Plano Interno foi atualizado com successo!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Plano Interno não pôde ser atualizado. Tente Novamente!'));
			}
		} else {
			$options = array('conditions' => array('Plano.' . $this->Plano->primaryKey => $id));
			$this->request->data = $this->Plano->find('first', $options);
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
		$this->Plano->id = $id;
		if (!$this->Plano->exists()) {
			throw new NotFoundException(__('Plano Interno Inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Plano->delete()) {
			$this->Session->setFlash(__('O Plano Interno foi deletado com successo!'));
		} else {
			$this->Session->setFlash(__('O Plano Interno não pôde ser deletado. Verifique os relacionamentos e Tente Novamente! '));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
