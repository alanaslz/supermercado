<div class="relatorios index row">
	<div class="actions col-md-10 col-md-offset-1">
		<div class="box box-solid">
	                <div class="box-header with-border">
		                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
		                <div class="box-tools">
	                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                  	</div>
	                </div>
	                
	                 <div class="box-body no-padding">
		              
						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Relatorios"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Relatorios </a>
	                 
<!--
						-->
	                 </div>
		</div>
	</div>
</div>  

<div class="row">
	<div class="relatorios  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Edit Relatorio'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('Relatorio', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => __('Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => __('Name')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sql', array('class' => 'form-control', 'placeholder' => __('Sql')));?>
				</div>
<hr/>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submeter'), array('class' => 'btn btn-primary','div'=>false)); ?>
<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Relatorio.id')), 
			                 	array('class'=>'btn btn-danger pull-right'), __('Confirma exclusão do registro # %s?', $this->Form->value('Relatorio.id'))); ?>				</div>

			<?php echo $this->Form->end() ?>

	            
            </div>
		</div>
	</div>
</div>
