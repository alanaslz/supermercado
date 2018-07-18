<?php
App::uses('AppController', 'Controller');
/**
 * ModuloUsuarios Controller
 *
 * @property ModuloUsuario $ModuloUsuario
 * @property PaginatorComponent $Paginator
 */
class ModuloUsuariosController extends AppController {

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
		$this->ModuloUsuario->recursive = 0;
		$this->set('moduloUsuarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ModuloUsuario->exists($id)) {
			throw new NotFoundException(__('Invalid modulo usuario'));
		}
		$options = array('conditions' => array('ModuloUsuario.' . $this->ModuloUsuario->primaryKey => $id));
		$this->set('moduloUsuario', $this->ModuloUsuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ModuloUsuario->create();
			if ($this->ModuloUsuario->save($this->request->data)) {
				$this->Session->setFlash(__('The modulo usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modulo usuario could not be saved. Please, try again.'));
			}
		}
		$modulos = $this->ModuloUsuario->Modulo->find('list');
		$usuarios = $this->ModuloUsuario->Usuario->find('list');
		$this->set(compact('modulos', 'usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ModuloUsuario->exists($id)) {
			throw new NotFoundException(__('Invalid modulo usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ModuloUsuario->save($this->request->data)) {
				$this->Session->setFlash(__('The modulo usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modulo usuario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ModuloUsuario.' . $this->ModuloUsuario->primaryKey => $id));
			$this->request->data = $this->ModuloUsuario->find('first', $options);
		}
		$modulos = $this->ModuloUsuario->Modulo->find('list');
		$usuarios = $this->ModuloUsuario->Usuario->find('list');
		$this->set(compact('modulos', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ModuloUsuario->id = $id;
		if (!$this->ModuloUsuario->exists()) {
			throw new NotFoundException(__('Invalid modulo usuario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ModuloUsuario->delete()) {
			$this->Session->setFlash(__('The modulo usuario has been deleted.'));
		} else {
			$this->Session->setFlash(__('The modulo usuario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
