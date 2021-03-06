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
                 
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Produtos Venda" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Produtos Venda </a>
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Ir para Página Inicial" href="<?php echo $this->Html->url(array('controller'=>'home','action' => 'index')); ?>"> <i class='fa fa-home'></i> Página Inicial </a>
<!--
                  <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Página Anterior" href="javascript:history.back()"> <i class='fa fa-arrow-circle-left'></i> Voltar </a>
               
-->
 
            
<!--
        
				 <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'produtos','action' => 'index')); ?>"> <i class='fa fa-list'></i> Produtos </a>
				 
				  <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'produtos','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Produto </a>
				 
				 	
				 	
				 				 <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'vendas','action' => 'index')); ?>"> <i class='fa fa-list'></i> Vendas </a>
				 
				  <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'vendas','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Venda </a>
				 
				 	
				 	
				 -->
    
    </div><!-- /.box-body -->
    
	</div>
</div>
 
	<div class="col-md-10  col-md-offset-1">
	<div class="box box-primary">
                <div class="box-header with-border">
	     
	                 <h3 class="box-title"><?php echo __('Produtos Vendas');?></h3>
                </div>
                <div class="box-body">
	                
 
	<table class="table table-bordered">
	<tbody>
	<tr>
		
		
	  	
		<th><?php echo $this->Paginator->sort('id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('produto_id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('venda_id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('preco_unit','');?></th>
    			<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
	foreach ($produtosVendas as $produtosVenda): ?>
	<tr>
		<td><?php echo h($produtosVenda['ProdutosVenda']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($produtosVenda['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $produtosVenda['Produto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($produtosVenda['Venda']['id'], array('controller' => 'vendas', 'action' => 'view', $produtosVenda['Venda']['id'])); ?>
		</td>
		<td><?php echo h($produtosVenda['ProdutosVenda']['preco_unit']); ?>&nbsp;</td>
		<td class="actions">
			<div class="btn-toolbar">
					<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $produtosVenda['ProdutosVenda']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $produtosVenda['ProdutosVenda']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $produtosVenda['ProdutosVenda']['id']), array('class' => 'btn btn-default btn-xs'), __('Confirma Exclusão do Registro # %s?', $produtosVenda['ProdutosVenda']['id'])); ?>
			</div>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<!--
    <div class="well">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</div>
-->

	<div class="paging btn-group">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array('class' => 'prev btn'), null, array('class' => 'prev disabled btn'));
		echo $this->Paginator->numbers(array('separator' => '', 'class' => 'btn', 'currentClass' => 'active'));
		echo $this->Paginator->next(__('Próxima') . ' >', array('class' => 'next btn'), null, array('class' => 'next disabled btn'));
	?>
	</div>
</div>
</div>

