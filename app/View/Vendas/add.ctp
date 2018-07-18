<div class="vendas index row">
	<div class="actions col-md-10 col-md-offset-1">
		<div class="box box-solid">
	                <div class="box-header with-border">
		                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
		                <div class="box-tools">
	                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                  	</div>
	                </div>
	                
	                 <div class="box-body no-padding">
		              
						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Vendas"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Vendas </a>
	                 
<!--
																
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'usuarios','action' => 'index')); ?>"> 
												 <i class='fa fa-list'></i> Usuarios </a>
										 
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'usuarios','action' => 'add')); ?>"> 
											  <i class='fa fa-plus'></i> Usuario </a>
						
																					
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'produtos','action' => 'index')); ?>"> 
												 <i class='fa fa-list'></i> Produtos </a>
										 
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'produtos','action' => 'add')); ?>"> 
											  <i class='fa fa-plus'></i> Produto </a>
						
											-->
	                 </div>
		</div>
	</div>
</div>  

<div class="row">
	<div class="vendas  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Add Venda'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('Venda', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('usuario_id', array('class' => 'form-control', 'placeholder' => __('Usuario Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('vlr_total', array('class' => 'form-control', 'placeholder' => __('Vlr Total')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status', array('class' => 'form-control', 'placeholder' => __('Status')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('Produto', array('class' => 'form-control', 'placeholder' => 'Modified'));?>
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
