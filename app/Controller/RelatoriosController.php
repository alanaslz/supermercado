<?php
App::uses('AppController', 'Controller');
/**
 * Relatorios Controller
 *
 * @property Relatorio $Relatorio
 * @property PaginatorComponent $Paginator
 */
class RelatoriosController extends AppController {

 

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler');
	
	public $uses = array('Relatorio','Viagem','Passagem','Diaria','Setor');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Relatorio->recursive = 0;
		$this->set('relatorios', $this->Paginator->paginate());
		
		
	}

	public function view_pdf($id = null) {
	//$this->layout = 'pdf/default';
		
    $this->Viagem->id = $id;
    if (!$this->Viagem->exists()) {
        throw new NotFoundException(__('Invalid Viagem'));
    }
    // increase memory limit in PHP 
    ini_set('memory_limit', '512M');
    $this->set('viagem', $this->Viagem->read(null, $id));
	}


	public function diarias() {
		
		if ($this->request->is('post')) {
			
		$dt_inicio = $this->data['Relatorio']['dt_inicio'];
		$dt_fim = $this->data['Relatorio']['dt_fim'];	 
		$colaborador_id = $this->data['Relatorio']['colaborador_id'];
		$viagem_id = $this->data['Relatorio']['viagem_id'];
		
		
		
		$conditions = array(); 
					
		if (!empty($dt_inicio) and ($dt_inicio != 'dd/mm/aaaa') ) $conditions['and'][] = array('Viagem.dt_inicio >= ' => DateTime::createFromFormat('d/m/Y', $dt_inicio)->format('Y-m-d'));
		if (!empty($dt_fim) and ($dt_fim != 'dd/mm/aaaa') ) $conditions['and'][] = array('Viagem.dt_fim <= ' => DateTime::createFromFormat('d/m/Y', $dt_fim)->format('Y-m-d'));
		if (!empty($viagem_id)) $conditions['and'][] = array('Viagem.id'=> $viagem_id);
		if (!empty($colaborador_id)) $conditions['and'][] = array('Diaria.colaborador_id'=> $colaborador_id);
		
	 
	 
	 
		$options = array('conditions' => $conditions);
	 	$diarias = $this->Diaria->find('all',$options);
	 	$this->set('diarias', $diarias);
	 	
	 	//debug($diarias); 
		}
			
		$viagens = $this->Diaria->Viagem->find('list');
		$colaboradores = $this->Diaria->Colaborador->find('list', array('order' => array('Colaborador.name' => 'asc')));
		$this->set(compact('viagens', 'colaboradores'));
		

	}


	public function passagens() {
		
		if ($this->request->is('post')) {
			
		$dt_inicio = $this->data['Relatorio']['dt_inicio'];
		$dt_fim = $this->data['Relatorio']['dt_fim'];	 
		$colaborador_id = $this->data['Relatorio']['colaborador_id'];
		$viagem_id = $this->data['Relatorio']['viagem_id'];
		
		
		
		$conditions = array(); 
					
		if (!empty($dt_inicio) and ($dt_inicio != 'dd/mm/aaaa') ) $conditions['and'][] = array('Viagem.dt_inicio >= ' => DateTime::createFromFormat('d/m/Y', $dt_inicio)->format('Y-m-d'));
		if (!empty($dt_fim) and ($dt_fim != 'dd/mm/aaaa') ) $conditions['and'][] = array('Viagem.dt_fim <= ' => DateTime::createFromFormat('d/m/Y', $dt_fim)->format('Y-m-d'));
		if (!empty($viagem_id)) $conditions['and'][] = array('Viagem.id'=> $viagem_id);
		if (!empty($colaborador_id)) $conditions['and'][] = array('Passagem.colaborador_id'=> $colaborador_id);
		
	 
	 
	 
		$options = array('conditions' => $conditions);
	 	$passagens = $this->Passagem->find('all',$options);
	 	$this->set('passagens', $passagens);
	 	
	 	// debug($passagens); 
		}
			
		$viagens = $this->Passagem->Viagem->find('list');
		$colaboradores = $this->Passagem->Colaborador->find('list', array('order' => array('Colaborador.name' => 'asc')));
		$this->set(compact('viagens', 'colaboradores'));
		

	}


	public function viagens() {
		
		
	if ($this->request->is('post')) {
		
	  //debug($this->data); exit;
		
		
		$dt_inicio = $this->data['Relatorio']['dt_inicio'];
		$dt_fim = $this->data['Relatorio']['dt_fim'];	 
		$oficio = $this->data['Relatorio']['oficio'];
		$processo = $this->data['Relatorio']['processo'];
		$programa_id = $this->data['Relatorio']['programa_id'];
		$plano_id = $this->data['Relatorio']['plano_id'];
		$tdestino_id = $this->data['Relatorio']['tdestino_id'];
		$origem_id = $this->data['Relatorio']['origem_id'];
		$agravo_id = $this->data['Relatorio']['agravo_id'];
		$municipio_id = $this->data['Relatorio']['municipio_id'];
		//$ordem= $this->data['Relatorio']['ordem'];
	 
		
		$conditions = array(); 
		
		
		 


		 $joins = array( 
		 			array(
					 	'table' => 'agravos_viagens',
			            'alias' => 'AgravosViagem',
			            'type' => 'LEFT',
			            'conditions' => array('Viagem.id = AgravosViagem.viagem_id')
			                
					),
					array(
					 	'table' => 'municipios_viagens',
			            'alias' => 'MunicipiosViagem',
			            'type' => 'LEFT',
			            'conditions' => array('Viagem.id = MunicipiosViagem.viagem_id')
			                
					)
			
        
        
        );
		$group = array('Viagem.id');
 

		if (!empty($oficio)) $conditions['and'][] = array('Viagem.oficio'=> $oficio);
		if (!empty($processo)) $conditions['and'][] = array('Viagem.processo'=> $processo);
		if (!empty($programa_id)) $conditions['and'][] = array('Viagem.programa_id'=> $programa_id);
		if (!empty($plano_id)) $conditions['and'][] = array('Viagem.plano_id'=> $plano_id);
		if (!empty($tdestino_id)) $conditions['and'][] = array('Viagem.tdestino_id'=> $tdestino_id);
		if (!empty($origem_id)) $conditions['and'][] = array('Viagem.origem_id'=> $origem_id);
		if (!empty($agravo_id)) $conditions['and'][] = array('AgravosViagem.agravo_id'=> $agravo_id);
		if (!empty($municipio_id)) $conditions['and'][] = array('MunicipiosViagem.municipio_id'=> $municipio_id);
/* 		if (!empty($agravos)) */  // $conditions['and'][] = array(''=> 2 );

				
		if (!empty($dt_inicio) and ($dt_inicio != 'dd/mm/aaaa') ) $conditions['and'][] = array('Viagem.dt_inicio >= ' => DateTime::createFromFormat('d/m/Y', $dt_inicio)->format('Y-m-d'));
		if (!empty($dt_fim) and ($dt_fim != 'dd/mm/aaaa') ) $conditions['and'][] = array('Viagem.dt_fim <= ' => DateTime::createFromFormat('d/m/Y', $dt_fim)->format('Y-m-d'));
		
		
	 
                             
                             
 
		
		$options = array('conditions' => $conditions, 'joins'=>$joins, 'group'=>$group);
	 
	 	$viagens = $this->Viagem->find('all', $options);
	 	$this->set('viagens', $viagens);
	   
	   //debug($viagens);
		
	
	}


	
	$municipios = $this->Viagem->Municipio->find('list');
	$agravos = $this->Viagem->Agravo->find('list');
	$tdestinos = $this->Viagem->Tdestino->find('list');
	$planos = $this->Viagem->Plano->find('list');
	$programas = $this->Viagem->Programa->find('list');
	 
	
	$this->set(compact('municipios','agravos','tdestinos','planos','programas', 'tabela'));
 
	}




/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
/*
		if (!$this->Relatorio->exists($id)) {
			throw new NotFoundException(__('Invalid relatorio'));
		}
		$options = array('conditions' => array('Relatorio.' . $this->Relatorio->primaryKey => $id));
		$this->set('relatorio', $this->Relatorio->find('first', $options));
*/

		
		$this->set('tabela');
	
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Relatorio->create();
			if ($this->Relatorio->save($this->request->data)) {
				$this->Session->setFlash(__('The relatorio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relatorio could not be saved. Please, try again.'));
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
		if (!$this->Relatorio->exists($id)) {
			throw new NotFoundException(__('Invalid relatorio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Relatorio->save($this->request->data)) {
				$this->Session->setFlash(__('The relatorio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relatorio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Relatorio.' . $this->Relatorio->primaryKey => $id));
			$this->request->data = $this->Relatorio->find('first', $options);
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
		$this->Relatorio->id = $id;
		if (!$this->Relatorio->exists()) {
			throw new NotFoundException(__('Invalid relatorio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Relatorio->delete()) {
			$this->Session->setFlash(__('The relatorio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The relatorio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	
	
	 function listar_municipios(){    
            
            $municipios = $this->Viagem->Municipio->find('list',array('order'=>array('Municipio.name' => 'asc')));
            $this->set(compact('municipios'));
        }
        
/*
      public function  funcionarios($viagem_id = null) {
		
		
			$this->Viagem->id = $viagem_id;
			
			if (!$this->Viagem->exists()) {
			    throw new NotFoundException();
			}
        
        
			$viagem = $this->Viagem->read(null, $viagem_id);
		 		  
			$conditions = array();
			
			$conditions['and'][] = array('Proposta.status'=> 'E');
			if (!empty($viagem_id)) $conditions['and'][] = array('Viagem.id'=> $viagem_id);
				
				  	
		 	$options = array('conditions' => $conditions);
	 	  
		  $params = array(
			            'download' => false,
			            'name' => "Funcinarios_Viagem"."-".htmlEntities($viagem['Viagem']['name']).".pdf",
			            'paperOrientation' => 'landscape',
			            'paperSize' => 'A4'
			        );
			        
			        
			  $this->set($params); 
			  $this->set('viagem',$viagem);
 
			
		}
*/
		 public function  terceiros($viagem_id = null) {
		
		
			$this->Viagem->id = $viagem_id;
			
			if (!$this->Viagem->exists()) {
			    throw new NotFoundException();
			}
        
			$bancos = $this->Diaria->Colaborador->Banco->find('list');
			 
			
        
			$viagem = $this->Viagem->read(null, $viagem_id);
		 	
		 	
		 	$diarias = $this->Diaria->findAllByViagemId($viagem_id);
		 		  
		 		 // debug($diarias);
		 		  
		 		  
			$conditions = array();
			
			$conditions['and'][] = array();
			if (!empty($viagem_id)) $conditions['and'][] = array('Viagem.id'=> $viagem_id);
				
				  	
		 	$options = array('conditions' => $conditions);
		 		  
  	  
 
		  $params = array(
			            'download' => false,
			            'name' => "Terceiros_Viagem"."-".htmlEntities($viagem['Viagem']['id']).".pdf",
			            'paperOrientation' => 'landscape',
			            'paperSize' => 'A4'
			        );
			        
			        
			  $this->set($params); 

			  $this->set('diarias',$diarias);
			  
			  $this->set('bancos',$bancos);
			  
			 
			
		}
		
		 public function  funcionarios($viagem_id = null) {
		
		
			$this->Viagem->id = $viagem_id;
			
			if (!$this->Viagem->exists()) {
			    throw new NotFoundException();
			}
        
			$bancos = $this->Diaria->Colaborador->Banco->find('list');
			 
			
        
			$viagem = $this->Viagem->read(null, $viagem_id);
		 	
		 	
		 	$diarias = $this->Diaria->findAllByViagemId($viagem_id);
		 	
		 	
		 	$superintencia = $this->Setor->read(null, 1); // Pega a superitendencia
		 	
		 		  
// 		 		   debug($viagem);
		 		  
		 		  
			$conditions = array();
			
			$conditions['and'][] = array();
			if (!empty($viagem_id)) $conditions['and'][] = array('Viagem.id'=> $viagem_id);
				
				  	
		 	$options = array('conditions' => $conditions);
		 		  
  	  
 
		  $params = array(
			            'download' => false,
			            'name' => "Terceiros_Viagem"."-".htmlEntities($viagem['Viagem']['id']).".pdf",
			            'paperOrientation' => 'landscape',
			            'paperSize' => 'A4'
			        );
			        
			        
			$this->set($params); 

			$this->set('diarias',$diarias);
			  
			 
			  
			$this->set('bancos',$bancos);
			
			$this->set('viagem',$viagem);
			  
			$this->set('superintencia',$superintencia);
			   
			  
			  
			 
			
		}
	
}
