<div class="roles index row">
	<div class="actions col-md-10 col-md-offset-1">
		<div class="box box-solid">
	                <div class="box-header with-border">
		                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
		                <div class="box-tools">
	                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                  	</div>
	                </div>
	                
	                 <div class="box-body no-padding">
		                		                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Role.id')), 
			                 	array('class'=>'btn btn-app'), __('Are you sure you want to delete # %s?', $this->Form->value('Role.id'))); ?>												
						<a class="btn btn-app" href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Roles </a>
	                 
																
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'usuarios','action' => 'index')); ?>"> 
												 <i class='fa fa-list'></i> Usuarios </a>
										 
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'usuarios','action' => 'add')); ?>"> 
											  <i class='fa fa-plus'></i> Usuario </a>
						
												                 </div>
		</div>
	</div>
</div>  

<div class="row">
	<div class="roles  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Edit Role'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('Role', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submeter'), array('class' => 'btn btn-primary','div'=>false)); ?>
				</div>

			<?php echo $this->Form->end() ?>

	            
            </div>
		</div>
	</div>
</div>
