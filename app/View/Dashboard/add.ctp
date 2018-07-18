<div class="bancos index row">
	<div class="actions col-md-10 col-md-offset-1">
		<div class="box box-solid">
	                <div class="box-header with-border">
		                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
		                <div class="box-tools">
	                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                  	</div>
	                </div>
	                
	                 <div class="box-body no-padding">
		              
						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Bancos"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Bancos </a>
	                 
<!--
						-->
	                 </div>
		</div>
	</div>
</div>  

<div class="row">
	<div class="bancos  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Adicionar Banco'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('Banco', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('codigo', array('class' => 'form-control', 'label'=>'Código', 'placeholder' => __('Código')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control',  'label'=>'Nome', 'type'=>'text','placeholder' => __('Nome')));?>
				</div>
			            <div class="row">
							<div class="col-md-4">
			             					<?php echo $this->Form->input('status', array('class'=>'form-control','default'=>'1' ,'options' => array(0=>'Inativo', 1=>'Ativo'))); ?>
							</div>
			             </div>
						 <hr/>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submeter'), array('class' => 'btn btn-primary','div'=>false)); ?>
				</div>

			<?php echo $this->Form->end() ?>

	            
            </div>
		</div>
	</div>
</div>
