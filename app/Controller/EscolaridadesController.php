<?php
App::uses('AppController', 'Controller');
/**
 * Escolaridades Controller
 *
 * @property Escolaridade $Escolaridade
 * @property PaginatorComponent $Paginator
 */
class EscolaridadesController extends AppController {

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
		$this->Escolaridade->recursive = 0;
		$this->set('escolaridades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Escolaridade->exists($id)) {
			throw new NotFoundException(__('Escolaridade Inválida'));
		}
		$options = array('conditions' => array('Escolaridade.' . $this->Escolaridade->primaryKey => $id));
		$this->set('escolaridade', $this->Escolaridade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Escolaridade->create();
			if ($this->Escolaridade->save($this->request->data)) {
				$this->Session->setFlash(__('A escolaridade foi adicionada com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A escolaridade não pôde ser adicionada. Tente Novamente!'));
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
		if (!$this->Escolaridade->exists($id)) {
			throw new NotFoundException(__('Escolaridade Inválida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Escolaridade->save($this->request->data)) {
				$this->Session->setFlash(__('A escolaridade foi editada com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A escolaridade não pôde ser editada. Tente Novamente!'));
			}
		} else {
			$options = array('conditions' => array('Escolaridade.' . $this->Escolaridade->primaryKey => $id));
			$this->request->data = $this->Escolaridade->find('first', $options);
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
		$this->Escolaridade->id = $id;
		if (!$this->Escolaridade->exists()) {
			throw new NotFoundException(__('Escolaridade Inválida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Escolaridade->delete()) {
			$this->Session->setFlash(__('A escolaridade foi deletada com sucesso.'));
		} else {
			$this->Session->setFlash(__('A escolaridade não pôde ser deletada. Tente Novamente!.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
