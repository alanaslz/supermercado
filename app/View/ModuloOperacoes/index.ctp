<div class="moduloOperacoes index row">
<div class="actions col-md-10 col-md-offset-1">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
                 
                 <a class="btn btn-app" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Modulo Operacao </a>
               
 
            
        
				 <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'modulos','action' => 'index')); ?>"> <i class='fa fa-list'></i> Modulos </a>
				 
				  <a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'modulos','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Modulo </a>
				 
				 	
				 	
				     
    </div><!-- /.box-body -->
    
	</div>
</div>
 
	<div class="col-md-10  col-md-offset-1">
	<div class="box box-primary">
                <div class="box-header with-border">
	     
	                 <h3 class="box-title"><?php echo __('Modulo Operacoes');?></h3>
                </div>
                <div class="box-body">
	                
 
	<table class="table table-bordered">
	<tbody>
	<tr>
			<th>id</th>
			<th>name</th>
			<th>modulo_id</th>
			<th>modelo</th>
			<th>action</th>
			<th>created</th>
			<th>modified</th>
			<th>ordem</th>
			<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
	foreach ($moduloOperacoes as $moduloOperacao): ?>
	<tr>
		<td><?php echo h($moduloOperacao['ModuloOperacao']['id']); ?>&nbsp;</td>
		<td><?php echo h($moduloOperacao['ModuloOperacao']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($moduloOperacao['Modulo']['name'], array('controller' => 'modulos', 'action' => 'view', $moduloOperacao['Modulo']['id'])); ?>
		</td>
		<td><?php echo h($moduloOperacao['ModuloOperacao']['modelo']); ?>&nbsp;</td>
		<td><?php echo h($moduloOperacao['ModuloOperacao']['action']); ?>&nbsp;</td>
		<td><?php echo h($moduloOperacao['ModuloOperacao']['created']); ?>&nbsp;</td>
		<td><?php echo h($moduloOperacao['ModuloOperacao']['modified']); ?>&nbsp;</td>
		<td><?php echo h($moduloOperacao['ModuloOperacao']['ordem']); ?>&nbsp;</td>
		<td class="actions">
			<div class="btn-toolbar">
					<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $moduloOperacao['ModuloOperacao']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $moduloOperacao['ModuloOperacao']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $moduloOperacao['ModuloOperacao']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $moduloOperacao['ModuloOperacao']['id'])); ?>
			</div>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    
</div>
</div>

