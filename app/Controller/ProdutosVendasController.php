<?php
App::uses('AppController', 'Controller');
/**
 * ProdutosVendas Controller
 *
 * @property ProdutosVenda $ProdutosVenda
 * @property PaginatorComponent $Paginator
 */
class ProdutosVendasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	var $uses = array('Caixa','ProdutosVenda');

	
	public function atualizaTotalVenda ($venda) {
			$venda[] = $valor;
		
		 
/*
			$this->ProdutosVenda->virtualFields['preco_total'] = 'SUM(qtd * preco_unit)';
			$totalPoints = $this->Member->Point->find('all', array('fields' => array('total')));


			$this->User->getVirtualField('name');
		 
*/
		 
		 
		 	
				// atualiza o valor venda 
				
				$options = array(
					'conditions' => array('Venda.Id' => $venda_id),
					'fields' => array( 'SUM(preco * qtd) AS TOTAL'),
					 'group' => 'ProdutosVenda.venda_id'
					);
				
				$total = $this->ProdutosVenda->find('all', $options);
				
				//$this->edita_total($venda_id,$total[0][0]['TOTAL']);
				
				$venda =  $this->ProdutosVenda->Venda->findById($venda_id);
				
				
 				$this->atualiza($venda,'Venda', 'vlr_total', $total[0][0]['TOTAL']);



		
		$this->ProdutosVenda->Venda->save($objeto);
		
	}
	
	
	
	
	public function caixa($venda_id = null)  {
			 
	 

		if ($this->request->is('post')) {
			
			
			$this->ProdutosVenda->create();
			
			$produto = $this->ProdutosVenda->Produto->findById($this->request->data['ProdutosVenda']['produto_id']);
			
			$this->request->data['ProdutosVenda']['preco_unit'] = $produto['Produto']['preco'];
			
			if ($this->ProdutosVenda->save($this->request->data)) {
				$this->Session->setFlash(__('Produto adicionado!'));
				return $this->redirect(array('action' => 'caixa',$venda_id));
			} else {
				$this->Session->setFlash(__('Erro: tente novamente!'));
			}
		}
		$produtos = $this->ProdutosVenda->Produto->find('list');
		$vendas = $this->ProdutosVenda->Venda->find('list');
		
		
		
		$this->set(compact('produtos', 'vendas','venda_id'));
		
		$options = array('conditions' => array('Venda.id' => $venda_id));
		$this->set('venda', $this->ProdutosVenda->Venda->find('first', $options));
		
		
	}


		public function edita_total($id = null, $total = null) {
				
			 
				
				if (!$this->ProdutosVenda->Venda->exists($id)) {
					throw new NotFoundException(__('Invalid venda'));
				}
				if ($total != null) {
					
					$venda = $this->ProdutosVenda->Venda->findById($id);
					
					$venda['Venda']['vlr_total'] = $total;
					
					
					if ($this->ProdutosVenda->Venda->save($venda)) {
						// return true;
					}
				}	
			}





/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProdutosVenda->recursive = 0;
		$this->set('produtosVendas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProdutosVenda->exists($id)) {
			throw new NotFoundException(__('Invalid produtos venda'));
		}
		$options = array('conditions' => array('ProdutosVenda.' . $this->ProdutosVenda->primaryKey => $id));
		$this->set('produtosVenda', $this->ProdutosVenda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
	
		 
		if ($this->request->is('post')) {
			$this->ProdutosVenda->create();
			if ($this->ProdutosVenda->save($this->request->data)) {
				$this->Session->setFlash(__('The produtos venda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produtos venda could not be saved. Please, try again.'));
			}
		}
		$produtos = $this->ProdutosVenda->Produto->find('list');
		$vendas = $this->ProdutosVenda->Venda->find('list');
		$this->set(compact('produtos', 'vendas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
 
	public function edit($id = null) {
		if (!$this->ProdutosVenda->exists($id)) {
			throw new NotFoundException(__('Invalid produtos venda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProdutosVenda->save($this->request->data)) {
				$this->Session->setFlash(__('The produtos venda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produtos venda could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProdutosVenda.' . $this->ProdutosVenda->primaryKey => $id));
			$this->request->data = $this->ProdutosVenda->find('first', $options);
		}
		$produtos = $this->ProdutosVenda->Produto->find('list');
		$vendas = $this->ProdutosVenda->Venda->find('list');
		$this->set(compact('produtos', 'vendas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $venda_id = null) {
		$this->ProdutosVenda->id = $id;
		if (!$this->ProdutosVenda->exists()) {
			throw new NotFoundException(__('Invalid produtos venda'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProdutosVenda->delete()) {
			$this->Session->setFlash(__('The produtos venda has been deleted.'));
		} else {
			$this->Session->setFlash(__('The produtos venda could not be deleted. Please, try again.'));
		}
		
		$this->Caixa->atualizaTotalVenda($venda_id);
		
		return $this->redirect(array('controller' => 'caixas', 'action'=>'index'));
		
		
	}
	
}
