<div class="produtos index row">
<div class="actions col-md-10 col-md-offset-1">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
                 
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Produto" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Produto </a>
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Ir para Página Inicial" href="<?php echo $this->Html->url(array('controller'=>'home','action' => 'index')); ?>"> <i class='fa fa-home'></i> Página Inicial </a>
<!--
                  <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Página Anterior" href="javascript:history.back()"> <i class='fa fa-arrow-circle-left'></i> Voltar </a>
               
-->
 
            
<!--
        
				 <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'categorias','action' => 'index')); ?>"> <i class='fa fa-list'></i> Categorias </a>
				 
				  <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'categorias','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Categoria </a>
				 
				 	
				 	
				 				 <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'marcas','action' => 'index')); ?>"> <i class='fa fa-list'></i> Marcas </a>
				 
				  <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'marcas','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Marca </a>
				 
				 	
				 	
				 				 <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'unidades','action' => 'index')); ?>"> <i class='fa fa-list'></i> Unidades </a>
				 
				  <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'unidades','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Unidade </a>
				 
				 	
				 	
				 				 <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'estoques','action' => 'index')); ?>"> <i class='fa fa-list'></i> Estoques </a>
				 
				  <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'estoques','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Estoque </a>
				 
				 	
				 	
				 				 <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'vendas','action' => 'index')); ?>"> <i class='fa fa-list'></i> Vendas </a>
				 
				  <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'vendas','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Venda </a>
				 
				 	
				 	
				 -->
    
    </div><!-- /.box-body -->
    
	</div>
</div>
 
	<div class="col-md-10  col-md-offset-1">
	<div class="box box-primary">
                <div class="box-header with-border">
	     
	                 <h3 class="box-title"><?php echo __('Produtos');?></h3>
                </div>
                <div class="box-body">
	                
 
	<table class="table table-bordered">
	<tbody>
	<tr>
		
		
	  	
		<th><?php echo $this->Paginator->sort('id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('codigo','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('name','Nome');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('preco','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('categoria_id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('marca_id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('unidade_id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('status','');?></th>
    		
			
				<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
	foreach ($produtos as $produto): ?>
	<tr>
		<td><?php echo h($produto['Produto']['id']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['name']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['preco']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($produto['Categoria']['name'], array('controller' => 'categorias', 'action' => 'view', $produto['Categoria']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($produto['Marca']['name'], array('controller' => 'marcas', 'action' => 'view', $produto['Marca']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($produto['Unidade']['name'], array('controller' => 'unidades', 'action' => 'view', $produto['Unidade']['id'])); ?>
		</td>
		<td><?php echo h($produto['Produto']['status']); ?>&nbsp;</td>
		<td class="actions">
			<div class="btn-toolbar">
					<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $produto['Produto']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $produto['Produto']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $produto['Produto']['id']), array('class' => 'btn btn-default btn-xs'), __('Confirma Exclusão do Registro # %s?', $produto['Produto']['id'])); ?>
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

