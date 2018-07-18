<?php
App::uses('AppController', 'Controller');
/**
 * Diarias Controller
 *
 * @property Diaria $Diaria
 * @property PaginatorComponent $Paginator
 */
class DiariasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array('Diaria','Valor','Viagem');
	
	
	
	public function selecione() {
	
	$options = array('conditions' => array('Viagem.status' => 'ED'));
	
	$viagens = $this->Diaria->Viagem->find('all', $options);
	$this->set(compact('viagens'));

	}
	



/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Diaria->recursive = 0;
		$this->set('diarias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Diaria->exists($id)) {
			throw new NotFoundException(__('Invalid diaria'));
		}
		$options = array('conditions' => array('Diaria.' . $this->Diaria->primaryKey => $id));
		$this->set('diaria', $this->Diaria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if (!($id == null)) {
		$this->set('viagem_id', $id );	
		
		$opt2 = array('conditions' => array('Viagem.id' => $id));
		$viagem = $this->Viagem->find('first', $opt2);
		$this->set('viagem', $viagem );
		 
		
	} else {
		
	 $this->redirect(array('controller' => 'diarias', 'action' => 'selecione'));
		 
	} 


		if ($this->request->is('post')) {
			$this->Diaria->create();
			
			debug($this->data);
			
			$opt1 = array('conditions' => array('Colaborador.id' => $this->data['Diaria']['colaborador_id']));
			$colaborador = $this->Diaria->Colaborador->find('first', $opt1);
			
			$opt2 = array('conditions' => array('Viagem.id' => $this->data['Diaria']['viagem_id']));
			$viagem = $this->Diaria->Viagem->find('first', $opt2);
			
			$viagem_id =  $this->data['Diaria']['viagem_id'];
			 
			  // Grupo_id (colaborador)
             $this->request->data['Diaria']['grupo_id'] =  $colaborador['Colaborador']['grupo_id'];
             // Escolaridade (colaborador)
             $this->request->data['Diaria']['escolaridade_id'] =  $colaborador['Colaborador']['escolaridade_id'];
				// tdestino (viagem)
			 $this->request->data['Diaria']['tdestino_id'] =  $viagem['Viagem']['tdestino_id'];
			
			
			$grupo = $colaborador['Colaborador']['grupo_id'];
			$tdestino = $viagem['Viagem']['tdestino_id'];
			$escolaridade = $colaborador['Colaborador']['escolaridade_id'];
			
			debug(' grupo='. $grupo .' tdestino='. $tdestino.' $escolaridade='. $escolaridade);// exit;
			
			
			$valordiaria = self::CalcularDiaria($grupo, $tdestino, $escolaridade);

			 $this->request->data['Diaria']['valor'] = 		$valordiaria['valor'];
			 $this->request->data['Diaria']['moeda'] = 		$valordiaria['moeda'];
			 	 
			  
			  
			  
			  
		 
			if ($this->Diaria->save($this->request->data)) {
				
				 
			 
				
				$this->Session->setFlash(__('A Diária foi adicionada com sucesso.'));
				return $this->redirect(array('controller'=>'viagens','action' => 'view',$viagem_id));
				
				
			} else {
				$this->Session->setFlash(__('A Diária não pôde ser adicionada. Por favor, tente novamente.'));
			}
		}
		$viagens = $this->Diaria->Viagem->find('list');
		$colaboradores = $this->Diaria->Colaborador->find('list', array('order' => array('Colaborador.name' => 'asc')));
		$tdestinos = $this->Diaria->Tdestino->find('list');
		$escolaridades = $this->Diaria->Escolaridade->find('list');
		$grupos = $this->Diaria->Grupo->find('list');
		$usuarios = $this->Diaria->Usuario->find('list');

		$this->set(compact('viagens', 'colaboradores', 'tdestinos', 'escolaridades', 'grupos','usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Diaria->exists($id)) {
			throw new NotFoundException(__('Invalid diaria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			
		    $opt1 = array('conditions' => array('Colaborador.id' => $this->data['Diaria']['colaborador_id']));
			$colaborador = $this->Diaria->Colaborador->find('first', $opt1);
			
			$opt2 = array('conditions' => array('Viagem.id' => $this->data['Diaria']['viagem_id']));
			$viagem = $this->Diaria->Viagem->find('first', $opt2);
			
			
			 
			  // Grupo_id (colaborador)
             $this->request->data['Diaria']['grupo_id'] =  $colaborador['Colaborador']['grupo_id'];
             // Escolaridade (colaborador)
             $this->request->data['Diaria']['escolaridade_id'] =  $colaborador['Colaborador']['escolaridade_id'];
				// tdestino (viagem)
			 $this->request->data['Diaria']['tdestino_id'] =  $viagem['Viagem']['tdestino_id'];
			 
		
		
		
		
			$grupo = $colaborador['Colaborador']['grupo_id'];
			$tdestino = $viagem['Viagem']['tdestino_id'];
			$escolaridade = $colaborador['Colaborador']['escolaridade_id'];
			
			$valordiaria = self::CalcularDiaria($grupo, $tdestino, $escolaridade);
			
			 
			 $this->request->data['Diaria']['valor'] = 		$valordiaria['valor'];
			 $this->request->data['Diaria']['moeda'] = 		$valordiaria['moeda'];
			  
			 
			 
			if ($this->Diaria->save($this->request->data)) {
				$this->Session->setFlash(__('A diária foi atualizada com sucesso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A diária não pôde ser atualizada. Por favor, tente novamente'));
			}
		} else {
			$options = array('conditions' => array('Diaria.' . $this->Diaria->primaryKey => $id));
			$this->request->data = $this->Diaria->find('first', $options);
		}
		
		//$opt2 = array('conditions' => array('Viagem.id' => $this->data['Diaria']['viagem_id']));
		//$viagem = $this->Diaria->Viagem->find('first', $opt2);
			
		$viagem_id = $viagem['Viagem']['id'];
		$viagens = $this->Diaria->Viagem->find('list');
		$colaboradores = $this->Diaria->Colaborador->find('list', array('order' => array('Colaborador.name' => 'asc')));
		$tdestinos = $this->Diaria->Tdestino->find('list');
		$escolaridades = $this->Diaria->Escolaridade->find('list');
		$grupos = $this->Diaria->Grupo->find('list');
		$usuarios = $this->Diaria->Usuario->find('list');
		$this->set(compact('viagens', 'colaboradores', 'tdestinos', 'escolaridades', 'grupos','usuarios','viagem_id'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Diaria->id = $id;
		if (!$this->Diaria->exists()) {
			throw new NotFoundException(__('Invalid diaria'));
		}
		
		$options = array('conditions' => array('Diaria.' . $this->Diaria->primaryKey => $id));
		$diaria = $this->Diaria->find('first', $options);
		$viagem_id = $diaria['Viagem']['id'];
		
		$this->request->allowMethod('post', 'delete');
		if ($this->Diaria->delete()) {
			$this->Session->setFlash(__('A Diária foi deletada com sucesso'));
		} else {
			$this->Session->setFlash(__('A Diária não pôde ser deletada. Tente novamente!'));
		}
		return $this->redirect(array('controller'=>'viagens','action' => 'view',$viagem_id));
	}
	
	
	
	public function CalcularDiaria($grupo_id = null ,$tdestino_id = null, $escolaridade_id = null) { 
		
		
		
		$opt = array('conditions' => array('Valor.tdestino_id' => $tdestino_id, 
										   'Valor.grupo_id' => $grupo_id,
										   'Valor.escolaridade_id' => $escolaridade_id));
										   
										   
										   
		$valor = $this->Valor->find('first', $opt);
	
	  return $valor['Valor'];
		
	}
	
}
