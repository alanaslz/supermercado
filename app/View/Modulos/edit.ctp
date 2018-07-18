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
		                		                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Modulo.id')), 
			                 	array('class'=>'btn btn-app'), __('Are you sure you want to delete # %s?', $this->Form->value('Modulo.id'))); ?>												
						<a class="btn btn-app" href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Modulos </a>
	                 
							                 </div>
		</div>
	</div>
</div>  

<div class="row">
	<div class="modulos  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Edit Modulo'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('Modulo', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('descricao', array('class' => 'form-control', 'placeholder' => 'Descricao'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cor', array('class' => 'form-control', 'placeholder' => 'Cor'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('icone', array('class' => 'form-control', 'placeholder' => 'Icone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ordem', array('class' => 'form-control', 'placeholder' => 'Ordem'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submeter'), array('class' => 'btn btn-primary','div'=>false)); ?>
				</div>

			<?php echo $this->Form->end() ?>

	            
            </div>
		</div>
	</div>
</div>
