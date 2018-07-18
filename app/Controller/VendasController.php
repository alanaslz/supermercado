<?php
App::uses('AppController', 'Controller');
/**
 * Vendas Controller
 *
 * @property Venda $Venda
 * @property PaginatorComponent $Paginator
 */
class VendasController extends AppController {




	public function iniciar() {
		$this->Venda->create();
 
		
		$this->request->data['Venda']['usuario_id'] =  $this->Auth->user("id");

		
		$this->data['Venda']['status'] = 0;
		
		if ($this->Venda->save($this->data)) {
				
			$this->Session->write('venda_id', $this->Venda->id);
				 
			return $this->redirect(array('controller'=>'Caixa','action' => 'index'));
		} else {
			$this->Session->setFlash(__('A venda não pôde ser criada. Tente Novamente.'));
		}
			
			

	}



	public function trocar() {

		$this->Venda->recursive = 0;
		$this->set('vendas', $this->Paginator->paginate());
		
		
	}





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
		$this->Venda->recursive = 0;
		$this->set('vendas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Venda->exists($id)) {
			throw new NotFoundException(__('Invalid venda'));
		}
		$options = array('conditions' => array('Venda.' . $this->Venda->primaryKey => $id));
		$this->set('venda', $this->Venda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Venda->create();
			if ($this->Venda->save($this->request->data)) {
				$this->Session->setFlash(__('A venda foi gravada com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A venda não pode ser gravada. Por favor, tente novamente.'));
			}
		}
		$usuarios = $this->Venda->Usuario->find('list');
		$produtos = $this->Venda->Produto->find('list');
		$this->set(compact('usuarios', 'produtos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Venda->exists($id)) {
			throw new NotFoundException(__('Invalid venda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Venda->save($this->request->data)) {
				$this->Session->setFlash(__('The venda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venda could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Venda.' . $this->Venda->primaryKey => $id));
			$this->request->data = $this->Venda->find('first', $options);
		}
		$usuarios = $this->Venda->Usuario->find('list');
		$produtos = $this->Venda->Produto->find('list');
		$this->set(compact('usuarios', 'produtos'));
	}
	
	
	public function edita_total($id = null, $total = null) {
		
		
		debug('entrou'); 
		
		debug($id);
		
		debug($total);
		
		
		exit;
		
		if (!$this->Venda->exists($id)) {
			throw new NotFoundException(__('Invalid venda'));
		}
		if ($total != null) {
			
			$this->request->data['total'] = $total;
			
			if ($this->Venda->save($this->request->data)) {
				// return true;
			}
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
		$this->Venda->id = $id;
		if (!$this->Venda->exists()) {
			throw new NotFoundException(__('Invalid venda'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Venda->delete()) {
			$this->Session->setFlash(__('The venda has been deleted.'));
		} else {
			$this->Session->setFlash(__('The venda could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
