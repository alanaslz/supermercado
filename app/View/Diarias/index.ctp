


<div class="row">
	      <div class="col-lg-12  col-md-12  col-xs-12">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner" style="text-align: center">
					<h3>Diárias</h3>
                    <p>Módulo de Solicitação de Diárias</p>	                
                </div>
                <div class="icon">
                    <i class="fa fa-dollar"></i>
                </div>
                <div class="small-box-footer"></div>
            </div>
        </div>
</div>


<div class="diarias index row">
<div class="actions col-md-12">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
                 
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Diaria" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Diaria </a>
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Ir para Página Inicial" href="<?php echo $this->Html->url(array('controller'=>'home','action' => 'index')); ?>"> <i class='fa fa-home'></i> Página Inicial </a>
     </div><!-- /.box-body -->
    
	</div>
</div>
 
	<div class="col-md-12">
	<div class="box box-primary">
                <div class="box-header with-border">
	     
	                 <h3 class="box-title"><?php echo __('Diarias');?></h3>
                </div>
                <div class="box-body">
	                
 
	<table class="table table-bordered">
	<tbody>
	<tr>
		
		
	  	
		<th><?php echo $this->Paginator->sort('id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('viagem_id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('colaborador_id','');?></th>
    		
		
	  	
<!--
		<th><?php echo $this->Paginator->sort('tdestino_id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('escolaridade_id','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('grupo_id','');?></th>
    		
		
-->
	  	
		<th><?php echo $this->Paginator->sort('quantidade','');?></th>
    		
		
	  	
		<th><?php echo $this->Paginator->sort('valor','');?></th>
    		
		
	  	
<!-- 		<th><?php echo $this->Paginator->sort('observacao','');?></th> -->
    		
			
				<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
	foreach ($diarias as $diaria): ?>
	<tr>
		 
		<td><?php echo h($diaria['Diaria']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($diaria['Viagem']['name'], array('controller' => 'viagens', 'action' => 'view', $diaria['Viagem']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($diaria['Colaborador']['name'], array('controller' => 'colaboradores', 'action' => 'view', $diaria['Colaborador']['id'])); ?>
		</td>
<!--
		<td>
			<?php echo $this->Html->link($diaria['Tdestino']['name'], array('controller' => 'tdestinos', 'action' => 'view', $diaria['Tdestino']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($diaria['Escolaridade']['name'], array('controller' => 'escolaridades', 'action' => 'view', $diaria['Escolaridade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($diaria['Grupo']['name'], array('controller' => 'grupos', 'action' => 'view', $diaria['Grupo']['id'])); ?>
		</td>
-->
		<td><?php echo h($diaria['Diaria']['quantidade']); ?>&nbsp;</td>
		<td><?php echo h($diaria['Diaria']['valor']); ?>&nbsp;</td>
<!-- 		<td><?php echo h($diaria['Diaria']['observacao']); ?>&nbsp;</td> -->
		<td class="actions">
			<div class="btn-toolbar">
					<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $diaria['Diaria']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					
			<?  if($diaria['Viagem']['status'] == 'ED') { ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $diaria['Diaria']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					<? } ?>
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

