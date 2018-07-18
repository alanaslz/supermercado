<?php
App::uses('AppController', 'Controller');
/**
 * Ofertas Controller
 *
 * @property Oferta $Oferta
 * @property PaginatorComponent $Paginator
 */
class OfertasController extends AppController {

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
		$this->Oferta->recursive = 0;
		$this->set('ofertas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Oferta->exists($id)) {
			throw new NotFoundException(__('Invalid oferta'));
		}
		$options = array('conditions' => array('Oferta.' . $this->Oferta->primaryKey => $id));
		$this->set('oferta', $this->Oferta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			
			$dt = DateTime::createFromFormat('d/m/Y', $this->data['Oferta']['data'])->format('Y-m-d');
			
			
			
			$this->Oferta->create();
			
			$this->request->data['Oferta']['data'] = $dt;
			
			if ($this->Oferta->save($this->request->data)) {
				$this->Session->setFlash(__('The oferta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oferta could not be saved. Please, try again.'));
			}
		}
		$produtos = $this->Oferta->Produto->find('list');
		$this->set(compact('produtos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Oferta->exists($id)) {
			throw new NotFoundException(__('Invalid oferta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			
			$dt = DateTime::createFromFormat('d/m/Y', $this->data['Oferta']['data'])->format('Y-m-d');
			$this->request->data['Oferta']['data'] = $dt;



			if ($this->Oferta->save($this->request->data)) {
				$this->Session->setFlash(__('A oferta foi gravada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A oferta não pôde ser gravada. Tente Novamente.'));
			}
		} else {
			$options = array('conditions' => array('Oferta.' . $this->Oferta->primaryKey => $id));
			$this->request->data = $this->Oferta->find('first', $options);
		}
		$produtos = $this->Oferta->Produto->find('list');
		$this->set(compact('produtos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Oferta->id = $id;
		if (!$this->Oferta->exists()) {
			throw new NotFoundException(__('Invalid oferta'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Oferta->delete()) {
			$this->Session->setFlash(__('The oferta has been deleted.'));
		} else {
			$this->Session->setFlash(__('The oferta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
