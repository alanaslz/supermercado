<div class="inventarios index row">
<div class="actions col-md-10 col-md-offset-1">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
                 
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Inventario" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Inventario </a>
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Ir para Página Inicial" href="<?php echo $this->Html->url(array('controller'=>'home','action' => 'index')); ?>"> <i class='fa fa-home'></i> Página Inicial </a>
<!--
                  <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Página Anterior" href="javascript:history.back()"> <i class='fa fa-arrow-circle-left'></i> Voltar </a>
               
-->
 
            
<!--
        
				 <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'estoques','action' => 'index')); ?>"> <i class='fa fa-list'></i> Estoques </a>
				 
				  <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'estoques','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Estoque </a>
				 
				 	
				 	
				 -->
    
    </div><!-- /.box-body -->
    
	</div>
</div>
 
	<div class="col-md-10  col-md-offset-1">
	<div class="box box-primary">
                <div class="box-header with-border">
	     
	                 <h3 class="box-title"><?php echo __('Inventarios');?></h3>
                </div>
                <div class="box-body">
	                
 
	<table class="table table-bordered">
	<tbody>
	<tr>
		
		
	  	
		<th><?php echo $this->Paginator->sort('id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('estoque_id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('qtd','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('preco_custo','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('preco_venda','');?></th>
    		
			
				<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
	foreach ($inventarios as $inventario): ?>
	<tr>
		<td><?php echo h($inventario['Inventario']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inventario['Estoque']['id'], array('controller' => 'estoques', 'action' => 'view', $inventario['Estoque']['id'])); ?>
		</td>
		<td><?php echo h($inventario['Inventario']['qtd']); ?>&nbsp;</td>
		<td><?php echo h($inventario['Inventario']['preco_custo']); ?>&nbsp;</td>
		<td><?php echo h($inventario['Inventario']['preco_venda']); ?>&nbsp;</td>
		<td class="actions">
			<div class="btn-toolbar">
					<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $inventario['Inventario']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $inventario['Inventario']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $inventario['Inventario']['id']), array('class' => 'btn btn-default btn-xs'), __('Confirma Exclusão do Registro # %s?', $inventario['Inventario']['id'])); ?>
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

