<div class="moduloUsuarios index row">
	<div class="actions col-md-10 col-md-offset-1">
		<div class="box box-solid">
	                <div class="box-header with-border">
		                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
		                <div class="box-tools">
	                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                  	</div>
	                </div>
	                
	                 <div class="box-body no-padding">
		                		                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ModuloUsuario.id')), 
			                 	array('class'=>'btn btn-app'), __('Are you sure you want to delete # %s?', $this->Form->value('ModuloUsuario.id'))); ?>												
						<a class="btn btn-app" href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Modulo Usuarios </a>
	                 
																
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'modulos','action' => 'index')); ?>"> 
												 <i class='fa fa-list'></i> Modulos </a>
										 
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'modulos','action' => 'add')); ?>"> 
											  <i class='fa fa-plus'></i> Modulo </a>
						
																					
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'usuarios','action' => 'index')); ?>"> 
												 <i class='fa fa-list'></i> Usuarios </a>
										 
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'usuarios','action' => 'add')); ?>"> 
											  <i class='fa fa-plus'></i> Usuario </a>
						
												                 </div>
		</div>
	</div>
</div>  

<div class="row">
	<div class="moduloUsuarios  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Edit Modulo Usuario'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('ModuloUsuario', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('modulo_id', array('class' => 'form-control', 'placeholder' => 'Modulo Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('usuario_id', array('class' => 'form-control', 'placeholder' => 'Usuario Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submeter'), array('class' => 'btn btn-primary','div'=>false)); ?>
				</div>

			<?php echo $this->Form->end() ?>

	            
            </div>
		</div>
	</div>
</div>
