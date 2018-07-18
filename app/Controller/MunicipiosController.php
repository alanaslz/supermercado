<?php
App::uses('AppController', 'Controller');
/**
 * Municipios Controller
 *
 * @property Municipio $Municipio
 * @property PaginatorComponent $Paginator
 */
class MunicipiosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');



	public function teste() {
 
 if ($this->request->is('post')) {
		debug($this->data);
		}
	
		$this->set('municipios', $this->Municipio->find('list'));
	
	}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Municipio->recursive = 0;
		$this->set('municipios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Municipio->exists($id)) {
			throw new NotFoundException(__('Município Inválido'));
		}
		$options = array('conditions' => array('Municipio.' . $this->Municipio->primaryKey => $id));
		$this->set('municipio', $this->Municipio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Municipio->create();
			if ($this->Municipio->save($this->request->data)) {
				$this->Session->setFlash(__('O Município foi adicionado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Município não pôde ser adicionado. Tente Novamente!'));
			}
		}
		$estados = $this->Municipio->Estado->find('list');
		$regionais = $this->Municipio->Regional->find('list');
		$this->set(compact('estados', 'regionais'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Municipio->exists($id)) {
			throw new NotFoundException(__('Invalid municipio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Municipio->save($this->request->data)) {
				$this->Session->setFlash(__('O Município foi editado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O Município não pôde ser atualizado. Tente Novamente!'));
			}
		} else {
			$options = array('conditions' => array('Municipio.' . $this->Municipio->primaryKey => $id));
			$this->request->data = $this->Municipio->find('first', $options);
		}
		$estados = $this->Municipio->Estado->find('list');
		$regionais = $this->Municipio->Regional->find('list');
		$this->set(compact('estados', 'regionais'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Municipio->id = $id;
		if (!$this->Municipio->exists()) {
			throw new NotFoundException(__('Invalid municipio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Municipio->delete()) {
			$this->Session->setFlash(__('O Município foi deletado com sucesso!'));
		} else {
			$this->Session->setFlash(__('O Município não pôde ser deletado. Tente Novamente!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
