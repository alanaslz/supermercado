<div class="colaboradores index row">
<div class="actions col-md-10 col-md-offset-1">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
                 
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Colaborador" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Colaborador </a>
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Ir para Página Inicial" href="<?php echo $this->Html->url(array('controller'=>'home','action' => 'index')); ?>"> <i class='fa fa-home'></i> Página Inicial </a>
     
    </div><!-- /.box-body -->
    
	</div>
</div>
 
	<div class="col-md-10  col-md-offset-1">
	<div class="box box-primary">
                <div class="box-header with-border">
	     
	                 <h3 class="box-title"><?php echo __('Colaboradores');?></h3>
                </div>
                <div class="box-body">
	                
 
             
	<table class="table table-bordered">
	<tbody>
	<tr>
		
		
	  	
		<th><?php echo $this->Paginator->sort('id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('name','Nome');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('cpf','CPF');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('email','');?></th>
    		
    		
		
	  	
		<th><?php echo $this->Paginator->sort('status','');?></th>
    		
			
				<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
	foreach ($colaboradores as $colaborador): ?>
	<tr>
		<td><?php echo h($colaborador['Colaborador']['id']); ?>&nbsp;</td>
		<td><?php echo h($colaborador['Colaborador']['name']); ?>&nbsp;</td>
		<td><?php echo h($colaborador['Colaborador']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($colaborador['Colaborador']['email']); ?>&nbsp;</td>
	
		<td><?php if($colaborador['Colaborador']['status']==0){echo '<span class="label label-default">Inativo</span>';} else {echo '<span class="label label-success">Ativo</span>';} ?>&nbsp;</td>
		<td class="actions">
			<div class="btn-toolbar">
					<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $colaborador['Colaborador']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $colaborador['Colaborador']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					
			</div>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
 
	<div class="paging btn-group">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array('class' => 'prev btn'), null, array('class' => 'prev disabled btn'));
		echo $this->Paginator->numbers(array('separator' => '', 'class' => 'btn', 'currentClass' => 'active'));
		echo $this->Paginator->next(__('Próxima') . ' >', array('class' => 'next btn'), null, array('class' => 'next disabled btn'));
	?>
	</div>
</div>
</div>

