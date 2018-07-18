<?php
App::uses('AppController', 'Controller');
/**
 * Aprovacoes Controller
 *
 * @property Aprovacao $Aprovacao
 * @property PaginatorComponent $Paginator
 */
class AprovacoesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	public $uses = array('Aprovacao','Usuario','Viagem');

/**
 * index method
 *
 * @return void
 */
 
 
 public function teste() {

	}


 


	public function index() {
		
		$usuario_id = $this->Auth->user("id");
		
		
		if (!$this->Usuario->exists($usuario_id)) {
			throw new NotFoundException(__('Usuário Inválido'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $usuario_id));
		$usuario = $this->Usuario->find('first', $options);




		
		$this->set('viagens', $this->Aprovacao->Viagem->find('list'));

		$options = array('conditions' => array('Aprovacao.Colaborador_Id' =>$usuario ['Usuario']['colaborador_id']));
		$this->set('aprovacoes', $this->Aprovacao->find('all', $options));
		
		
/*
		$this->Aprovacao->recursive = 0;
		$this->set('aprovacoes', $this->Paginator->paginate($options));
		
		$user_id
		
*/
		
	}
	
	
	public function pendentes() {
		
		$usuario_id = $this->Auth->user("id");
		
		
		if (!$this->Usuario->exists($usuario_id)) {
			throw new NotFoundException(__('Usuário Inválido'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $usuario_id));
		$usuario = $this->Usuario->find('first', $options);




		
		$this->set('viagens', $this->Aprovacao->Viagem->find('list'));

		$options = array('conditions' => array('Aprovacao.Colaborador_Id' =>$usuario ['Usuario']['colaborador_id'],
												'Aprovacao.status'=>'AN'));
		$this->set('aprovacoes', $this->Aprovacao->find('all', $options));
		
		
/*
		$this->Aprovacao->recursive = 0;
		$this->set('aprovacoes', $this->Paginator->paginate($options));
		
		$user_id
		
*/
		
	}
	
	
	public function reprovadas() {
		
		$usuario_id = $this->Auth->user("id");
		
		
		if (!$this->Usuario->exists($usuario_id)) {
			throw new NotFoundException(__('Usuário Inválido'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $usuario_id));
		$usuario = $this->Usuario->find('first', $options);




		
		$this->set('viagens', $this->Aprovacao->Viagem->find('list'));

		$options = array('conditions' => array('Aprovacao.Colaborador_Id' =>$usuario ['Usuario']['colaborador_id'],
												'Aprovacao.status'=>'RE'));
		$this->set('aprovacoes', $this->Aprovacao->find('all', $options));
		
		
/*
		$this->Aprovacao->recursive = 0;
		$this->set('aprovacoes', $this->Paginator->paginate($options));
		
		$user_id
		
*/
		
	}
	
	
	public function aprovadas() {
		
		$usuario_id = $this->Auth->user("id");
		
		
		if (!$this->Usuario->exists($usuario_id)) {
			throw new NotFoundException(__('Usuário Inválido'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $usuario_id));
		$usuario = $this->Usuario->find('first', $options);




		
		$this->set('viagens', $this->Aprovacao->Viagem->find('list'));

		$options = array('conditions' => array('Aprovacao.Colaborador_Id' =>$usuario ['Usuario']['colaborador_id'],
												'Aprovacao.status'=>'AP'));
		$this->set('aprovacoes', $this->Aprovacao->find('all', $options));
		
		
/*
		$this->Aprovacao->recursive = 0;
		$this->set('aprovacoes', $this->Paginator->paginate($options));
		
		$user_id
		
*/
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Aprovacao->exists($id)) {
			throw new NotFoundException(__('Invalid aprovacao'));
		}
		$options = array('conditions' => array('Aprovacao.' . $this->Aprovacao->primaryKey => $id));
		$this->set('aprovacao', $this->Aprovacao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aprovacao->create();
			if ($this->Aprovacao->save($this->request->data)) {
				$this->Session->setFlash(__('The aprovacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aprovacao could not be saved. Please, try again.'));
			}
		}
		$viagens = $this->Aprovacao->Viagem->find('list');
		$colaboradores = $this->Aprovacao->Colaborador->find('list');
		$this->set(compact('viagens', 'colaboradores'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Aprovacao->exists($id)) {
			throw new NotFoundException(__('Invalid aprovacao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Aprovacao->save($this->request->data)) {
				$this->Session->setFlash(__('The aprovacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aprovacao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Aprovacao.' . $this->Aprovacao->primaryKey => $id));
			$this->request->data = $this->Aprovacao->find('first', $options);
		}
		$viagens = $this->Aprovacao->Viagem->find('list');
		$colaboradores = $this->Aprovacao->Colaborador->find('list');
		$this->set(compact('viagens', 'colaboradores'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Aprovacao->id = $id;
		if (!$this->Aprovacao->exists()) {
			throw new NotFoundException(__('Invalid aprovacao'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Aprovacao->delete()) {
			$this->Session->setFlash(__('The aprovacao has been deleted.'));
		} else {
			$this->Session->setFlash(__('The aprovacao could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
/*
	public function viagem($id = null) {
		if (!$this->Viagem->exists($id)) {
			throw new NotFoundException(__('Invalid viagem'));
		}
		$options = array('conditions' => array('Viagem.' . $this->Viagem->primaryKey => $id));
		$this->set('viagem', $this->Viagem->find('first', $options));
		
		$this->set('aprovacoes', $this->Aprovacao->findAllByViagemId($viagem_id));

		$this->set('passagens', $this->Viagem->Passagem->find('all',$options));
		$this->set('diarias', $this->Viagem->Diaria->find('all',$options));
		$this->set('colaboradores', $this->Viagem->Passagem->Colaborador->find('list'));
		$this->set('transportes',$this->Viagem->Passagem->Transporte->find('list'));
	 
	}	
	
*/
 
	
	
	public function viagem($viagem_id = null) {
		if (!$this->Aprovacao->Viagem->exists($viagem_id)) {
			throw new NotFoundException(__('Viagem Inválida'));
		}
		$options = array('conditions' => array('Viagem.' . $this->Viagem->primaryKey => $viagem_id));
		$this->set('viagem', $this->Viagem->find('first', $options));
		
		$this->set('aprovacoes', $this->Aprovacao->findAllByViagemId($viagem_id));
		$this->set('passagens', $this->Viagem->Passagem->find('all',$options));
		$this->set('diarias', $this->Viagem->Diaria->find('all',$options));
		$this->set('colaboradores', $this->Viagem->Passagem->Colaborador->find('list'));
		$this->set('transportes',$this->Viagem->Passagem->Transporte->find('list'));
	 
	}
	
	
	 
	
	
	public function reprovar($id = null) {
		if (!$this->Aprovacao->exists($id)) {
			throw new NotFoundException(__('Invalid aprovacao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			$this->request->data['Aprovacao']['status'] =  'RE';
			
			if ($this->Aprovacao->save($this->request->data)) {
				$this->Session->setFlash(__('A viagem foi reprovada!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A viagem não pôde ser reprovada. Tente Novamente!'));
			}
		} else {
			$options = array('conditions' => array('Aprovacao.' . $this->Aprovacao->primaryKey => $id));
			$this->request->data = $this->Aprovacao->find('first', $options);
		}
		$viagens = $this->Aprovacao->Viagem->find('list');
		$colaboradores = $this->Aprovacao->Colaborador->find('list');
		$this->set(compact('viagens', 'colaboradores'));
	}

	
	
	
	public function aprovar() {
		
	 
		
		if (!$this->Aprovacao->exists($this->data['Aprovacao']['id'])) {
			throw new NotFoundException(__('Invalid aprovacao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			$this->request->data['Aprovacao']['status'] =  'AP';
			
			if ($this->Aprovacao->save($this->request->data)) {
				$this->Session->setFlash(__('A viagem foi Aprovada!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A viagem não pôde ser reprovada. Tente Novamente!'));
			}
		} else {
			$options = array('conditions' => array('Aprovacao.' . $this->Aprovacao->primaryKey => $id));
			$this->request->data = $this->Aprovacao->find('first', $options);
		}
		$viagens = $this->Aprovacao->Viagem->find('list');
		$colaboradores = $this->Aprovacao->Colaborador->find('list');
		$this->set(compact('viagens', 'colaboradores'));
	}



 
	
	
}
