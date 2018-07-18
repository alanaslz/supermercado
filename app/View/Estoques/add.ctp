<div class="estoques index row">
	<div class="actions col-md-10 col-md-offset-1">
		<div class="box box-solid">
	                <div class="box-header with-border">
		                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
		                <div class="box-tools">
	                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                  	</div>
	                </div>
	                
	                 <div class="box-body no-padding">
		              
						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Estoques"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Estoques </a>
	                 
<!--
																
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'lojas','action' => 'index')); ?>"> 
												 <i class='fa fa-list'></i> Lojas </a>
										 
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'lojas','action' => 'add')); ?>"> 
											  <i class='fa fa-plus'></i> Loja </a>
						
																					
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
	<div class="estoques  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Add Estoque'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('Estoque', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('loja_id', array('class' => 'form-control', 'placeholder' => __('Loja Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('produto_id', array('class' => 'form-control', 'placeholder' => __('Produto Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('qtd_min', array('class' => 'form-control', 'placeholder' => __('Qtd Min')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('qtd_max', array('class' => 'form-control', 'placeholder' => __('Qtd Max')));?>
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
