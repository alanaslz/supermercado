<div class="estoques index row">
<div class="actions col-md-10 col-md-offset-1">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
                 
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Estoque" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Estoque </a>
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Ir para Página Inicial" href="<?php echo $this->Html->url(array('controller'=>'home','action' => 'index')); ?>"> <i class='fa fa-home'></i> Página Inicial </a>
<!--
                  <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Página Anterior" href="javascript:history.back()"> <i class='fa fa-arrow-circle-left'></i> Voltar </a>
               
-->
 
            
<!--
        
				 <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'lojas','action' => 'index')); ?>"> <i class='fa fa-list'></i> Lojas </a>
				 
				  <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'lojas','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Loja </a>
				 
				 	
				 	
				 				 <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'produtos','action' => 'index')); ?>"> <i class='fa fa-list'></i> Produtos </a>
				 
				  <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'produtos','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Produto </a>
				 
				 	
				 	
				 -->
    
    </div><!-- /.box-body -->
    
	</div>
</div>
 
	<div class="col-md-10  col-md-offset-1">
	<div class="box box-primary">
                <div class="box-header with-border">
	     
	                 <h3 class="box-title"><?php echo __('Estoques');?></h3>
                </div>
                <div class="box-body">
	                
 
	<table class="table table-bordered">
	<tbody>
	<tr>
		
		
	  	
		<th><?php echo $this->Paginator->sort('id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('loja_id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('produto_id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('qtd_min','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('qtd_max','');?></th>
    		
			
				<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
	foreach ($estoques as $estoque): ?>
	<tr>
		<td><?php echo h($estoque['Estoque']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estoque['Loja']['name'], array('controller' => 'lojas', 'action' => 'view', $estoque['Loja']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($estoque['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $estoque['Produto']['id'])); ?>
		</td>
		<td><?php echo h($estoque['Estoque']['qtd_min']); ?>&nbsp;</td>
		<td><?php echo h($estoque['Estoque']['qtd_max']); ?>&nbsp;</td>
		<td class="actions">
			<div class="btn-toolbar">
					<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $estoque['Estoque']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $estoque['Estoque']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $estoque['Estoque']['id']), array('class' => 'btn btn-default btn-xs'), __('Confirma Exclusão do Registro # %s?', $estoque['Estoque']['id'])); ?>
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

