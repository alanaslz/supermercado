<?php
App::uses('AppController', 'Controller');
/**
 * MunicipiosViagens Controller
 *
 * @property MunicipiosViagem $MunicipiosViagem
 * @property PaginatorComponent $Paginator
 */
class MunicipiosViagensController extends AppController {

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
		$this->MunicipiosViagem->recursive = 0;
		$this->set('municipiosViagens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MunicipiosViagem->exists($id)) {
			throw new NotFoundException(__('Invalid municipios viagem'));
		}
		$options = array('conditions' => array('MunicipiosViagem.' . $this->MunicipiosViagem->primaryKey => $id));
		$this->set('municipiosViagem', $this->MunicipiosViagem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MunicipiosViagem->create();
			if ($this->MunicipiosViagem->save($this->request->data)) {
				$this->Session->setFlash(__('The municipios viagem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipios viagem could not be saved. Please, try again.'));
			}
		}
		$municipios = $this->MunicipiosViagem->Municipio->find('list');
		$viagens = $this->MunicipiosViagem->Viagem->find('list');
		$this->set(compact('municipios', 'viagens'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MunicipiosViagem->exists($id)) {
			throw new NotFoundException(__('Invalid municipios viagem'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MunicipiosViagem->save($this->request->data)) {
				$this->Session->setFlash(__('The municipios viagem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipios viagem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MunicipiosViagem.' . $this->MunicipiosViagem->primaryKey => $id));
			$this->request->data = $this->MunicipiosViagem->find('first', $options);
		}
		$municipios = $this->MunicipiosViagem->Municipio->find('list');
		$viagens = $this->MunicipiosViagem->Viagem->find('list');
		$this->set(compact('municipios', 'viagens'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MunicipiosViagem->id = $id;
		if (!$this->MunicipiosViagem->exists()) {
			throw new NotFoundException(__('Invalid municipios viagem'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MunicipiosViagem->delete()) {
			$this->Session->setFlash(__('The municipios viagem has been deleted.'));
		} else {
			$this->Session->setFlash(__('The municipios viagem could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
