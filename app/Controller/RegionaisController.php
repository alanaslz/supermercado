<?php
App::uses('AppController', 'Controller');
/**
 * Regionais Controller
 *
 * @property Regional $Regional
 * @property PaginatorComponent $Paginator
 */
class RegionaisController extends AppController {

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
		$this->Regional->recursive = 0;
		$this->set('regionais', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Regional->exists($id)) {
			throw new NotFoundException(__('Regional inválida'));
		}
		$options = array('conditions' => array('Regional.' . $this->Regional->primaryKey => $id));
		$this->set('regional', $this->Regional->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Regional->create();
			if ($this->Regional->save($this->request->data)) {
				$this->Session->setFlash(__('A regional foi adicionada com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A regional não pôde ser adicionada. Tente Novamente!'));
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
		if (!$this->Regional->exists($id)) {
			throw new NotFoundException(__('Regional Inválida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Regional->save($this->request->data)) {
				$this->Session->setFlash(__('A regional foi atualizada com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A regional não pôde ser atualizada. Tente Novamente!'));
			}
		} else {
			$options = array('conditions' => array('Regional.' . $this->Regional->primaryKey => $id));
			$this->request->data = $this->Regional->find('first', $options);
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
		$this->Regional->id = $id;
		if (!$this->Regional->exists()) {
			throw new NotFoundException(__('Regional Inválida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Regional->delete()) {
			$this->Session->setFlash(__('A regional foi deletada com sucesso!'));
		} else {
			$this->Session->setFlash(__('A regional não pôde ser deletada. Tente Novamente!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
