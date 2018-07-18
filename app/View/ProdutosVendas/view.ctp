<div class="produtosVendas index row">
<div class="actions col-md-10 col-md-offset-1">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
	             
 
 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Editar Produtos Venda" href="<?php echo $this->Html->url(array('action' => 'edit',$produtosVenda['ProdutosVenda']['id'])); ?>"> <i class='fa fa-pencil'></i> Produtos Venda </a>
 
 <a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Produtos Vendas"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Produtos Vendas </a>
	                 
<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Produtos Venda" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Produtos Venda </a>
 	                 


						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Produtos"  href="<?php echo $this->Html->url(array('controller' => 'produtos', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Produtos </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Produto" href="<?php echo $this->Html->url(array('controller' => 'produtos','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Produto </a>
						
						
												
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Vendas"  href="<?php echo $this->Html->url(array('controller' => 'vendas', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Vendas </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Venda" href="<?php echo $this->Html->url(array('controller' => 'vendas','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Venda </a>
						
						
								</ul>
	
	
	   
    </div><!-- /.box-body -->
    
	</div>
</div>

<div class="row">
	<div class="produtosVendas  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Detalhes -  Produtos Venda'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	            
		<h3><?php  echo __('Produtos Venda');?></h3>
		 
			
			<table class="table table-bordered">
				
					<tr><th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($produtosVenda['ProdutosVenda']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Produto'); ?></th>
		<td>
			<?php echo $this->Html->link($produtosVenda['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $produtosVenda['Produto']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Venda'); ?></th>
		<td>
			<?php echo $this->Html->link($produtosVenda['Venda']['id'], array('controller' => 'vendas', 'action' => 'view', $produtosVenda['Venda']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Preco Unit'); ?></th>
		<td>
			<?php echo h($produtosVenda['ProdutosVenda']['preco_unit']); ?>
			&nbsp;
		</td></tr>
		</table>
	</div>
</div>

