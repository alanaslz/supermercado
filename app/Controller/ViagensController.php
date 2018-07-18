<?php
App::uses('AppController', 'Controller');
/**
 * Viagens Controller
 *
 * @property Viagem $Viagem
 * @property PaginatorComponent $Paginator
 */
class ViagensController extends AppController {

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
		$this->Viagem->recursive = 0;
		$this->set('viagens', $this->Paginator->paginate());
	}


	public function status($viagem_id = null) {
		if (!$this->Viagem->exists($viagem_id)) {
			throw new NotFoundException(__('Viagem Inválida'));
		}
		$options = array('conditions' => array('Viagem.' . $this->Viagem->primaryKey => $viagem_id));
		$this->set('viagem', $this->Viagem->find('first', $options));
		
		$this->set('aprovacoes', $this->Viagem->Aprovacao->findAllByViagemId($viagem_id));
		$this->set('passagens', $this->Viagem->Passagem->find('all',$options));
		$this->set('diarias', $this->Viagem->Diaria->find('all',$options));
		$this->set('colaboradores', $this->Viagem->Passagem->Colaborador->find('list'));
		$this->set('transportes',$this->Viagem->Passagem->Transporte->find('list'));
	 
	}
	
 
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Viagem->exists($id)) {
			throw new NotFoundException(__('Código da Viagem Inválido'));
		}
		$options = array('conditions' => array('Viagem.' . $this->Viagem->primaryKey => $id));
		$this->set('viagem', $this->Viagem->find('first', $options));
		
		$this->set('passagens', $this->Viagem->Passagem->find('all',$options));
		$this->set('diarias', $this->Viagem->Diaria->find('all',$options));
		$this->set('colaboradores', $this->Viagem->Passagem->Colaborador->find('list'));
		$this->set('transportes',$this->Viagem->Passagem->Transporte->find('list'));
		$this->set('aprovacoes', $this->Viagem->Aprovacao->findAllByViagemId($id));
	 
	}
	
	
/*
	public function view2($id = null) {
		if (!$this->Viagem->exists($id)) {
			throw new NotFoundException(__('Invalid viagem'));
		}
		$options = array('conditions' => array('Viagem.' . $this->Viagem->primaryKey => $id));
		$this->set('viagem', $this->Viagem->find('first', $options));
		
		$this->set('passagens', $this->Viagem->Passagem->find('all',$options));
		$this->set('colaboradores', $this->Viagem->Passagem->Colaborador->find('list'));
		$this->set('transportes',$this->Viagem->Passagem->Transporte->find('list'));
	 
	}
*/
	

/**
 * add method
 *
 * @return void

 */
	public function add() {
		if ($this->request->is('post')) {
			
			
/*
			debug($this->data['Viagem']['dt_inicio']);
			debug((!empty($this->data['Viagem']['dt_inicio'])) and ($this->data['Viagem']['dt_inicio']!='dd/mm/aaaa')); exit;
*/
			
			 if ((!empty($this->data['Viagem']['dt_inicio'])) and ($this->data['Viagem']['dt_inicio']!='dd/mm/aaaa')) {
             $this->request->data['Viagem']['dt_inicio'] =  DateTime::createFromFormat('d/m/Y', $this->data['Viagem']['dt_inicio'])->format('Y-m-d');
            }
            
             if ((!empty($this->data['Viagem']['dt_fim'])) and ($this->data['Viagem']['dt_fim']!='dd/mm/aaaa')) {
             $this->request->data['Viagem']['dt_fim'] =  DateTime::createFromFormat('d/m/Y', $this->data['Viagem']['dt_fim'])->format('Y-m-d');
            }
            
            
          
         
             $this->request->data['Viagem']['status'] =  'ED'; // Ao cadastrar o status sera ED- Ediçao
         
             
           //  debug($this->data); exit;
            
			$this->Viagem->create();
			if ($this->Viagem->save($this->request->data)) {
				$this->Session->setFlash(__('A viagem foi adicionada com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A viagem não pôde ser adicionada. Tente Novamente!'));
			}
		}
		
		
		//$options = array('conditions' => array('Viagem.' . $this->Viagem->primaryKey => $id));
		
		$tdestinos = $this->Viagem->Tdestino->find('list');
		//$origens = $this->Viagem->Municipio->find('list');
		$municipios = $this->Viagem->Municipio->find('list', array('order' => array('name' => 'asc')));

		$programas = $this->Viagem->Programa->find('list', array('order' => array('Programa.name' => 'asc')));
		
		$agravos = $this->Viagem->Agravo->find('list', array('order' => array('Agravo.name' => 'asc')));
		$planos = $this->Viagem->Plano->find('list', array('order' => array('Plano.name' => 'asc')));
		$usuarios = $this->Viagem->Usuario->find('list');
		
		$this->set(compact('tdestinos', 'municipios', 'programas', 'planos', 'usuarios','agravos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		
		
		if (!$this->Viagem->exists($id)) {
			throw new NotFoundException(__('Invalid viagem'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			debug($this->data);  
			
			
			
			 if (!empty($this->data['Viagem']['dt_inicio'])) {
             $this->request->data['Viagem']['dt_inicio'] =  DateTime::createFromFormat('d/m/Y', $this->data['Viagem']['dt_inicio'])->format('Y-m-d');
            }
            
             if (!empty($this->data['Viagem']['dt_fim'])) {
             $this->request->data['Viagem']['dt_fim'] =  DateTime::createFromFormat('d/m/Y', $this->data['Viagem']['dt_fim'])->format('Y-m-d');
            }
            
            
         
           
            
			if ($this->Viagem->save($this->request->data)) {
				$this->Session->setFlash(__('A viagem foi atualizada com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A viagem não pôde ser atualizada. Tente Novamente!'));
			}
		} else {
			$options = array('conditions' => array('Viagem.' . $this->Viagem->primaryKey => $id));
			$this->request->data = $this->Viagem->find('first', $options);
		}
		 
		
		
		$tdestinos = $this->Viagem->Tdestino->find('list');
		//$origens = $this->Viagem->Municipio->find('list');
		$municipios = $this->Viagem->Municipio->find('list', array('order' => array('name' => 'asc')));

		$programas = $this->Viagem->Programa->find('list', array('order' => array('Programa.name' => 'asc')));
		
		$agravos = $this->Viagem->Agravo->find('list', array('order' => array('Agravo.name' => 'asc')));
		$planos = $this->Viagem->Plano->find('list', array('order' => array('Plano.name' => 'asc')));
		$usuarios = $this->Viagem->Usuario->find('list');
		
		$this->set(compact('tdestinos', 'municipios', 'programas', 'planos', 'usuarios','agravos'));
		
		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Viagem->id = $id;
		if (!$this->Viagem->exists()) {
			throw new NotFoundException(__('Invalid viagem'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Viagem->delete()) {
			$this->Session->setFlash(__('A viagem foi deletada com sucesso'));
		} else {
			$this->Session->setFlash(__('A viagem não pôde ser deletada.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	
/*
	public function enviar($id = null) {
		
		
		if (!$this->Viagem->exists($id)) {
			throw new NotFoundException(__('Viagem Inválida'));
		}
// 		if ($this->request->is(array('post', 'put'))) {
	
	
			$options = array('conditions' => array('Viagem.' . $this->Viagem->primaryKey => $id));
			$this->request->data = $this->Viagem->find('first', $options);
	
	
	
		 $this->request->data['Viagem']['status'] =  'AN';
          	
          	
          	if ($this->Viagem->save($this->request->data)) {
	          	
	          	debug('parada1'); exit;
	          	
	          	
				$this->Session->setFlash(__('A viagem foi enviada para aprovação.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A viagem não pôde ser enviada. Tente Novamente!'));
			}
 
	}
*/

public function enviar($id = null) {
		
		
		if (!$this->Viagem->exists($id)) {
			throw new NotFoundException(__('viagem inválida'));
		}
	 
	 
			$options = array('conditions' => array('Viagem.' . $this->Viagem->primaryKey => $id));
			$this->request->data = $this->Viagem->find('first', $options);
			
			 $this->request->data['Viagem']['status'] =  'AN';
            
			if ($this->Viagem->save($this->request->data)) {
			  	
				$this->Session->setFlash(__('A viagem foi enviada para aprovação.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A viagem não pôde ser enviada. Tente Novamente!'));
			}
		 
		 
		
 
		
	}
	
		
}

