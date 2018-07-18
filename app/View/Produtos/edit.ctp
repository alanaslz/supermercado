<div class="produtos index row">
	<div class="actions col-md-10 col-md-offset-1">
		<div class="box box-solid">
	                <div class="box-header with-border">
		                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
		                <div class="box-tools">
	                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                  	</div>
	                </div>
	                
	                 <div class="box-body no-padding">
		              
						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Produtos"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Produtos </a>
	                 
<!--
																
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'categorias','action' => 'index')); ?>"> 
												 <i class='fa fa-list'></i> Categorias </a>
										 
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'categorias','action' => 'add')); ?>"> 
											  <i class='fa fa-plus'></i> Categoria </a>
						
																					
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'marcas','action' => 'index')); ?>"> 
												 <i class='fa fa-list'></i> Marcas </a>
										 
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'marcas','action' => 'add')); ?>"> 
											  <i class='fa fa-plus'></i> Marca </a>
						
																					
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'unidades','action' => 'index')); ?>"> 
												 <i class='fa fa-list'></i> Unidades </a>
										 
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'unidades','action' => 'add')); ?>"> 
											  <i class='fa fa-plus'></i> Unidade </a>
						
																					
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'estoques','action' => 'index')); ?>"> 
												 <i class='fa fa-list'></i> Estoques </a>
										 
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'estoques','action' => 'add')); ?>"> 
											  <i class='fa fa-plus'></i> Estoque </a>
						
																					
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'vendas','action' => 'index')); ?>"> 
												 <i class='fa fa-list'></i> Vendas </a>
										 
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'vendas','action' => 'add')); ?>"> 
											  <i class='fa fa-plus'></i> Venda </a>
						
											-->
	                 </div>
		</div>
	</div>
</div>  

<div class="row">
	<div class="produtos  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Edit Produto'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('Produto', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => __('Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('codigo', array('class' => 'form-control', 'placeholder' => __('Codigo')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'type'=>'text','placeholder' => __('Nome do Produto'), 'label' => __('Nome do Produto')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('preco', array('class' => 'form-control', 'label' => __('Preço')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('categoria_id', array('class' => 'form-control select2', 'placeholder' => __('Categoria Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('marca_id', array('class' => 'form-control select2', 'placeholder' => __('Marca Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('unidade_id', array('class' => 'form-control select2', 'label' => __('Tipo da embalagem:')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status', array('class' => 'form-control', 'placeholder' => __('Status')));?>
				</div>
<hr/>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submeter'), array('class' => 'btn btn-primary','div'=>false)); ?>
<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Produto.id')), 
			                 	array('class'=>'btn btn-danger pull-right'), __('Confirma exclusão do registro # %s?', $this->Form->value('Produto.id'))); ?>				</div>

			<?php echo $this->Form->end() ?>

	            
            </div>
		</div>
	</div>
</div>
