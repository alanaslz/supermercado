<?php
App::uses('AppController', 'Controller');
/**
 * Colaboradores Controller
 *
 * @property Colaborador $Colaborador
 * @property PaginatorComponent $Paginator
 */
class ColaboradoresController extends AppController {

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
		$this->Colaborador->recursive = 0;
		$this->set('colaboradores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Colaborador->exists($id)) {
			throw new NotFoundException(__('Colaborador Inválido'));
		}
		$options = array('conditions' => array('Colaborador.' . $this->Colaborador->primaryKey => $id));
		$this->set('colaborador', $this->Colaborador->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			
			 
 
 
    if ((!empty($this->data['Colaborador']['dt_nascimento'])) and ($this->data['Colaborador']['dt_nascimento'] != 'dd/mm/aaaa')) {
             $this->request->data['Colaborador']['dt_nascimento'] =  DateTime::createFromFormat('d/m/Y', $this->data['Colaborador']['dt_nascimento'])->format('Y-m-d');
            }
		 
			$this->Colaborador->create();
			if ($this->Colaborador->save($this->request->data)) {
				$this->Session->setFlash(__('O colaborador foi adicionado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O colaborador não pôde ser adicionado. Tente novamente!'));
			}
		}
		$vinculos = $this->Colaborador->Vinculo->find('list');
		$grupos = $this->Colaborador->Grupo->find('list');
		$setores = $this->Colaborador->Setor->find('list');
		$bancos = $this->Colaborador->Banco->find('list');
		$escolaridades = $this->Colaborador->Escolaridade->find('list');
		$this->set(compact('vinculos', 'grupos', 'setores', 'bancos', 'escolaridades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
 
  


	public function edit($id = null) {
		



		if (!$this->Colaborador->exists($id)) {
			throw new NotFoundException(__('Colaborador Inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			 	
			 	debug(empty($this->data['Colaborador']['dt_nascimento']));  
			 	
		   if (!empty($this->data['Colaborador']['dt_nascimento'])) {
             $this->request->data['Colaborador']['dt_nascimento'] =  DateTime::createFromFormat('d/m/Y', $this->data['Colaborador']['dt_nascimento'])->format('Y-m-d');
            }
 
 
			if ($this->Colaborador->save($this->request->data)) {
				$this->Session->setFlash(__('O colaborador foi atualizado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O colaborador não pôde ser atualizado. Tente novamente!'));
			}
		} else {
			$options = array('conditions' => array('Colaborador.' . $this->Colaborador->primaryKey => $id));
			$this->request->data = $this->Colaborador->find('first', $options);
		}
		
	 
		 	
		$vinculos = $this->Colaborador->Vinculo->find('list');
		$grupos = $this->Colaborador->Grupo->find('list');
		$setores = $this->Colaborador->Setor->find('list');
		$bancos = $this->Colaborador->Banco->find('list');
		$escolaridades = $this->Colaborador->Escolaridade->find('list');
		$colaboradores = $this->Colaborador->Escolaridade->find('list');
		$this->set(compact('vinculos', 'grupos', 'setores', 'bancos', 'escolaridades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Colaborador->id = $id;
		if (!$this->Colaborador->exists()) {
			throw new NotFoundException(__('Colaborador Inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Colaborador->delete()) {
			$this->Session->setFlash(__('O colaborador foi deletado com sucesso!'));
		} else {
			$this->Session->setFlash(__('O colaborador não pôde ser deletado. Verifique os relacionamentos e tente novamente!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	public function dateFormatBeforeSave($dateString) {
    return $time->now();//date('99/99/9999', strtotime($dateString));
}
    
    
    
}
