<?php
	
	App::uses('AppController', 'Controller');
	
	
	class CaixaController extends AppController {
		
		var $name = 'Caixa';
        var $uses = array('ProdutosVenda');
		public $useTable = false;
	
		
		
		public function index()  {
			
			$venda_id = $this->getVendaId();
			
			if (!($venda_id == null)) {		
				if ($this->request->is('post')) {
				
					$this->adicionaOuEdita();	
					$this->atualizaTotalVenda($venda_id);
				}
				
				$this->set('venda', $this->obterVenda($venda_id));
				$this->set('produtos', $this->obterListaProdutos());
			} else {
				$this->redirect(array('controller' => 'vendas', 'action' => 'trocar'));
			}
			
		}
		
		
		public function getVendaId() {
			return $this->Session->read('venda_id');
		}
		
		
		public function getProduto($produto_id = null) {
			
			return $this->ProdutosVenda->Produto->findById($produto_id);
			
		}
		
		
		public function getProdutoVenda($produto_id = null) {
	 
			$options = array('conditions' => array('Venda.id' => $this->getVendaId(),
			'Produto.id' => $produto_id)); 
			
			
			$produto =  $this->ProdutosVenda->find('first',$options);
			
			 return $produto;
			
		}
		
		
		public function getPrecoProduto($produto_id = null) {
			
			$produto = $this->ProdutosVenda->Produto->findById($produto_id);
		 	return $produto['Produto']['preco'];

		}
		
		
		public function AdicionaOuEdita() {
			
			$novoProdutoVenda = $this->request->data;
						
			$produto_id = $novoProdutoVenda['ProdutosVenda']['produto_id'];
			$produtoVenda = $this->getProdutoVenda($produto_id);

	 		 
			if ($produtoVenda == null) {
					
				$this->ProdutosVenda->create(); 
				
			} else {
				
				$novoProdutoVenda['ProdutosVenda']['id'] =  $produtoVenda['ProdutosVenda']['id'];
				$novoProdutoVenda['ProdutosVenda']['qtd'] = $produtoVenda['ProdutosVenda']['qtd'] + $novoProdutoVenda['ProdutosVenda']['qtd'];
				
			}
						
				$novoProdutoVenda['ProdutosVenda']['preco_unit'] = $this->getPrecoProduto($produto_id);

				if ($this->ProdutosVenda->save($novoProdutoVenda)) {
					
				} else {
					
					$this->Session->setFlash(__('Erro: tente novamente!'));
			}
					
					
		}
 		 
		
		public function atualizaTotalVenda($venda_id = null){

				$venda =  $this->obterVenda($venda_id);
				$venda['Venda']['vlr_total'] = $this->obterTotalVenda($venda_id);
				
				if ($this->ProdutosVenda->Venda->save($venda)) {
					
				 
				} else {
					
					 
				}
	 		
		}		
		
		public function obterTotalVenda($venda_id = null){
			
			$options = array( 'conditions' => array('Venda.Id' => $venda_id), 'fields' => array( 'SUM(preco * qtd) AS TOTAL'), 'group' => 'ProdutosVenda.venda_id');	
			$total = $this->ProdutosVenda->find('all', $options);
			
			return $total[0][0]['TOTAL'];
			 
		}
		
		public function obterListaProdutos($venda_id = null){
		
			return $this->ProdutosVenda->Produto->find('list');
			
		}
		
		public function obterListaProdutosDaVenda(){
			
			$options = array('conditions' => array('Venda.id' => $this->getVendaId())); 
			debug($this->ProdutosVenda->find('all',$options));
			
		}


		public function obterVenda($venda_id = null) {
			
			$options = array('conditions' => array('Venda.id' => $venda_id)); 
			return $this->ProdutosVenda->Venda->find('first', $options);
			
		}
		
		public function seleciona($venda_id = null) {
			
			 $this->Session->write('venda_id', $venda_id);
			 return $this->redirect(array('action' => 'index'));
			
		}
		
		
		public function deleteProduto($id = null) {
			$this->ProdutosVenda->id = $id;
			
			if (!$this->ProdutosVenda->exists()) {
				throw new NotFoundException(__('Invalid produtos venda'));
			}
			
			$this->request->allowMethod('post', 'delete');
			
			if ($this->ProdutosVenda->delete()) {
				//$this->Session->setFlash(__('The produtos venda has been deleted.'));
			} else {
				//$this->Session->setFlash(__('The produtos venda could not be deleted. Please, try again.'));
			}
			
			$this->atualizaTotalVenda($this->getVendaId());
			
			return $this->redirect(array('action'=>'index'));
			
		}
}
?>