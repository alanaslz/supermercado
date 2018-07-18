<?php
App::uses('AppController', 'Controller');
/**
 * Passagens Controller
 *
 * @property Passagem $Passagem
 * @property PaginatorComponent $Paginator
 */
class PassagensController extends AppController {

/**
 * Components
 *
 * @var array
 */
 
	public $components = array('Paginator');



	public function selecione() {
	
	$options = array('conditions' => array('Viagem.status' => 'ED'));
	$viagens = $this->Passagem->Viagem->find('all', $options);
	$this->set(compact('viagens'));

	}
	
	


	public function viagem($id = null) {
		if (!$this->Passagem->exists($id)) {
			throw new NotFoundException(__('Invalid passagem'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Passagem->save($this->request->data)) {
				$this->Session->setFlash(__('The passagem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The passagem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Passagem.' . $this->Passagem->primaryKey => $id));
			$this->request->data = $this->Passagem->find('first', $options);
		}
		$viagens = $this->Passagem->Viagem->find('list');
		$colaboradores = $this->Diaria->Colaborador->find('list', array('order' => array('Colaborador.name' => 'asc')));
		$transportes = $this->Passagem->Transporte->find('list');
		$usuarios = $this->Passagem->Usuario->find('list');
		$this->set(compact('viagens', 'colaboradores', 'transportes', 'usuarios'));
	}

	
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Passagem->recursive = 0;
		$this->set('passagens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Passagem->exists($id)) {
			throw new NotFoundException(__('Invalid passagem'));
		}
		$options = array('conditions' => array('Passagem.' . $this->Passagem->primaryKey => $id));
		$this->set('passagem', $this->Passagem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	
		
	public function add($id = null) {
		if (!($id == null)) {
			
			$this->set('viagem_id', $id );		
		
		
		
	} else {
		
	 $this->redirect(array('controller' => 'passagens', 'action' => 'selecione'));
		 
	} 
	
	if ($this->request->is('post')) {
			
		 
			
			$this->Passagem->create();
			
			$viagem_id = $this->data['Passagem']['viagem_id'];
	 
			
			if ($this->Passagem->save($this->request->data)) {
				
				
				
				$this->Session->setFlash(__('A Passagem foi adicionada com sucesso.'));
				//return $this->redirect(array('action' => 'index'));
				return $this->redirect(array('controller'=>'viagens','action' => 'view',$viagem_id));
				
			} else {
				$this->Session->setFlash(__('A Passagem não pôde ser adicionada. Por favor, tente novamente.'));
			}
		}
		$viagens = $this->Passagem->Viagem->find('list');
		$colaboradores = $this->Passagem->Colaborador->find('list', array('order' => array('Colaborador.name' => 'asc')));
		$transportes = $this->Passagem->Transporte->find('list');
		$usuarios = $this->Passagem->Usuario->find('list');
		$this->set(compact('viagens', 'colaboradores', 'transportes', 'usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Passagem->exists($id)) {
			throw new NotFoundException(__('Invalid passagem'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
		
			
			if ($this->Passagem->save($this->request->data)) {
				
				//$viagem_id = $this->data['Passagem']['viagem_id'];
				
				$this->Session->setFlash(__('The passagem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The passagem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Passagem.' . $this->Passagem->primaryKey => $id));
			$this->request->data = $this->Passagem->find('first', $options);
		}
		
		$viagens = $this->Passagem->Viagem->find('list');
		$colaboradores = $this->Passagem->Colaborador->find('list', array('order' => array('Colaborador.name' => 'asc')));
		$transportes = $this->Passagem->Transporte->find('list');
		$usuarios = $this->Passagem->Usuario->find('list');
		$this->set(compact('viagens', 'colaboradores', 'transportes', 'usuarios','viagem_id'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Passagem->id = $id;
		if (!$this->Passagem->exists()) {
			throw new NotFoundException(__('Invalid passagem'));
		}
		
		
		
		$options = array('conditions' => array('Passagem.' . $this->Passagem->primaryKey => $id));
		$passagem =  $this->Passagem->findById($id);
		
 	 
		
		
		$this->request->allowMethod('post', 'delete');
		if ($this->Passagem->delete()) {
			$this->Session->setFlash(__('A passagem foi deletada com sucesso.'));
		} else {
			$this->Session->setFlash(__('A Passagem não pôde ser deletada. Tente novamente!'));
		}
 		return $this->redirect(array('controller'=>'viagens','action' => 'view',$passagem['Viagem']['id']));
	}
}
