<div class="diarias index row">
<div class="actions col-md-10 col-md-offset-1">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
	             
 
 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Editar Diaria" href="<?php echo $this->Html->url(array('action' => 'edit',$diaria['Diaria']['id'])); ?>"> <i class='fa fa-pencil'></i> Diaria </a>
 
 <a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Diarias"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Diarias </a>
	                 
<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Diaria" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Diaria </a>
 	                 


						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Viagens"  href="<?php echo $this->Html->url(array('controller' => 'viagens', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Viagens </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Viagem" href="<?php echo $this->Html->url(array('controller' => 'viagens','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Viagem </a>
						
						
												
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Colaboradores"  href="<?php echo $this->Html->url(array('controller' => 'colaboradores', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Colaboradores </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Colaborador" href="<?php echo $this->Html->url(array('controller' => 'colaboradores','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Colaborador </a>
						
						
												
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Tdestinos"  href="<?php echo $this->Html->url(array('controller' => 'tdestinos', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Tdestinos </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Tdestino" href="<?php echo $this->Html->url(array('controller' => 'tdestinos','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Tdestino </a>
						
						
												
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Escolaridades"  href="<?php echo $this->Html->url(array('controller' => 'escolaridades', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Escolaridades </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Escolaridade" href="<?php echo $this->Html->url(array('controller' => 'escolaridades','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Escolaridade </a>
						
						
												
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Grupos"  href="<?php echo $this->Html->url(array('controller' => 'grupos', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Grupos </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Grupo" href="<?php echo $this->Html->url(array('controller' => 'grupos','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Grupo </a>
						
						
								</ul>
	
	
	   
    </div><!-- /.box-body -->
    
	</div>
</div>

<div class="row">
	<div class="diarias  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Detalhes -  Diaria'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	            
		<h3><?php  echo __('Diaria');?></h3>
		 
			
			<table class="table table-bordered">
				
					<tr><th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($diaria['Diaria']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Viagem'); ?></th>
		<td>
			<?php echo $this->Html->link($diaria['Viagem']['name'], array('controller' => 'viagens', 'action' => 'view', $diaria['Viagem']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Colaborador'); ?></th>
		<td>
			<?php echo $this->Html->link($diaria['Colaborador']['name'], array('controller' => 'colaboradores', 'action' => 'view', $diaria['Colaborador']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Tdestino'); ?></th>
		<td>
			<?php echo $this->Html->link($diaria['Tdestino']['name'], array('controller' => 'tdestinos', 'action' => 'view', $diaria['Tdestino']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Escolaridade'); ?></th>
		<td>
			<?php echo $this->Html->link($diaria['Escolaridade']['name'], array('controller' => 'escolaridades', 'action' => 'view', $diaria['Escolaridade']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Grupo'); ?></th>
		<td>
			<?php echo $this->Html->link($diaria['Grupo']['name'], array('controller' => 'grupos', 'action' => 'view', $diaria['Grupo']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Quantidade'); ?></th>
		<td>
			<?php echo h($diaria['Diaria']['quantidade']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Valor'); ?></th>
		<td>
			<?php echo h($diaria['Diaria']['valor']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Observacao'); ?></th>
		<td>
			<?php echo h($diaria['Diaria']['observacao']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($diaria['Diaria']['created']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($diaria['Diaria']['modified']); ?>
			&nbsp;
		</td></tr>
		</table>
	</div>
</div>

