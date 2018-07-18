<div class="modulos index row">
<div class="actions col-md-10 col-md-offset-1">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
                 
                 <a class="btn btn-app" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Modulo </a>
               
 
            
        
    
    </div><!-- /.box-body -->
    
	</div>
</div>
 
	<div class="col-md-10  col-md-offset-1">
	<div class="box box-primary">
                <div class="box-header with-border">
	     
	                 <h3 class="box-title"><?php echo __('Modulos');?></h3>
                </div>
                <div class="box-body">
	                
 
	<table class="table table-bordered">
	<tbody>
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('descricao');?></th>
			<th><?php echo $this->Paginator->sort('cor');?></th>
			<th><?php echo $this->Paginator->sort('icone');?></th>
			<th><?php echo $this->Paginator->sort('ordem');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
	foreach ($modulos as $modulo): ?>
	<tr>
		<td><?php echo h($modulo['Modulo']['id']); ?>&nbsp;</td>
		<td><?php echo h($modulo['Modulo']['name']); ?>&nbsp;</td>
		<td><?php echo h($modulo['Modulo']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($modulo['Modulo']['cor']); ?>&nbsp;</td>
		<td><?php echo h($modulo['Modulo']['icone']); ?>&nbsp;</td>
		<td><?php echo h($modulo['Modulo']['ordem']); ?>&nbsp;</td>
		<td><?php echo h($modulo['Modulo']['created']); ?>&nbsp;</td>
		<td><?php echo h($modulo['Modulo']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<div class="btn-toolbar">
					<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $modulo['Modulo']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $modulo['Modulo']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $modulo['Modulo']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $modulo['Modulo']['id'])); ?>
			</div>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    <div class="well">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</div>

	<div class="paging btn-group">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array('class' => 'prev btn'), null, array('class' => 'prev disabled btn'));
		echo $this->Paginator->numbers(array('separator' => '', 'class' => 'btn', 'currentClass' => 'active'));
		echo $this->Paginator->next(__('Próxima') . ' >', array('class' => 'next btn'), null, array('class' => 'next disabled btn'));
	?>
	</div>
</div>
</div>

