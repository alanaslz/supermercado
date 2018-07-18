<?php
App::uses('AppController', 'Controller');
/**
 * Setores Controller
 *
 * @property Setor $Setor
 * @property PaginatorComponent $Paginator
 */
class SetoresController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
		 public $uses = array('Setor','Colaborador');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$setores = $this->Setor->generateTreeList(null,null,null," - ");
		 $this->set(compact('setores', $setores));
		 //debug($setores); exit;
		  
		  
		  $todos = $this->Setor->find('all');
	 
		  
		$responsavel = array();
       	foreach ($todos as $setor) {
	      
	       	$responsavel[$setor['Setor']['id']] = $setor['Colaborador']['name'] ;
	       	
       	}
  
  
 
       	$this->set(compact('responsavel'));
       	
      
 
       	
       
       	
       	
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Setor->exists($id)) {
			throw new NotFoundException(__('Invalid setor'));
		}
		$options = array('conditions' => array('Setor.' . $this->Setor->primaryKey => $id));
		$this->set('setor', $this->Setor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if (!($id == null)) {
		$this->set('parent_id', $id );		
	}
	if (!empty($this->data)) {
		 $this->Setor->save($this->data);
		 $this->redirect(array('action'=>'index'));
	} else {
			 $parents[0] = "[ Sem Setor Superior ]";
			 $Setorlist = $this->Setor->generateTreeList(null,null,null," - ");
			 if($Setorlist){
					 foreach ($Setorlist as $key=>$value){
						 $parents[$key] = $value;
					 }
					 $this->set(compact('parents'));
				 }
		  }
		  
		  $colaboradores = $this->Colaborador->find('list', array('order' => array('name' => 'asc')));
		  $this->set(compact('colaboradores'));
 
 }


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	function edit($id=null) {
	if (!empty($this->data)) {
 		if($this->Setor->save($this->data)==false)
		 	$this->Session->setFlash('Error saving Setor.');
		 	$this->redirect(array('action'=>'index'));
 	} else {
 		if($id==null) die("Código não informado");
 		$this->data = $this->Setor->read(null, $id);
 		$parents[0] = "[ Sem Setor Superior ]";
 		$Setorlist = $this->Setor->generateTreeList(null,null,null," - ");
 		if($Setorlist)
 			foreach ($Setorlist as $key=>$value) $parents[$key] = $value;
 				$this->set(compact('parents'));
 	}
 	  $colaboradores = $this->Colaborador->find('list', array('order' => array('name' => 'asc')));
		  $this->set(compact('colaboradores'));
		  
 }


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Setor->id = $id;
		if (!$this->Setor->exists()) {
			throw new NotFoundException(__('Setor Inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Setor->delete()) {
			$this->Session->setFlash(__('O setor foi deletado com sucesso!'));
		} else {
			$this->Session->setFlash(__('O Setor não pôde ser deletado. Tente Novamente!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
