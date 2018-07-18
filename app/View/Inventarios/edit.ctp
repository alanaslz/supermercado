<div class="inventarios index row">
	<div class="actions col-md-10 col-md-offset-1">
		<div class="box box-solid">
	                <div class="box-header with-border">
		                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
		                <div class="box-tools">
	                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                  	</div>
	                </div>
	                
	                 <div class="box-body no-padding">
		              
						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Inventarios"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Inventarios </a>
	                 
<!--
																
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'estoques','action' => 'index')); ?>"> 
												 <i class='fa fa-list'></i> Estoques </a>
										 
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'estoques','action' => 'add')); ?>"> 
											  <i class='fa fa-plus'></i> Estoque </a>
						
											-->
	                 </div>
		</div>
	</div>
</div>  

<div class="row">
	<div class="inventarios  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Edit Inventario'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('Inventario', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => __('Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('estoque_id', array('class' => 'form-control', 'placeholder' => __('Estoque Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('qtd', array('class' => 'form-control', 'placeholder' => __('Qtd')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('preco_custo', array('class' => 'form-control', 'placeholder' => __('Preco Custo')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('preco_venda', array('class' => 'form-control', 'placeholder' => __('Preco Venda')));?>
				</div>
<hr/>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submeter'), array('class' => 'btn btn-primary','div'=>false)); ?>
<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Inventario.id')), 
			                 	array('class'=>'btn btn-danger pull-right'), __('Confirma exclusão do registro # %s?', $this->Form->value('Inventario.id'))); ?>				</div>

			<?php echo $this->Form->end() ?>

	            
            </div>
		</div>
	</div>
</div>
