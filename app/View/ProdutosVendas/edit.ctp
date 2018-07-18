<div class="produtosVendas index row">
	<div class="actions col-md-10 col-md-offset-1">
		<div class="box box-solid">
	                <div class="box-header with-border">
		                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
		                <div class="box-tools">
	                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                  	</div>
	                </div>
	                
	                 <div class="box-body no-padding">
		              
						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Produtos Vendas"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Produtos Vendas </a>
	                 
<!--
																
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'produtos','action' => 'index')); ?>"> 
												 <i class='fa fa-list'></i> Produtos </a>
										 
											<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'produtos','action' => 'add')); ?>"> 
											  <i class='fa fa-plus'></i> Produto </a>
						
																					
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
	<div class="produtosVendas  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Edit Produtos Venda'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('ProdutosVenda', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => __('Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('produto_id', array('class' => 'form-control', 'placeholder' => __('Produto Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('venda_id', array('class' => 'form-control', 'placeholder' => __('Venda Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('preco_unit', array('class' => 'form-control', 'placeholder' => __('Preco Unit')));?>
				</div>
<hr/>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submeter'), array('class' => 'btn btn-primary','div'=>false)); ?>
<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('ProdutosVenda.id')), 
			                 	array('class'=>'btn btn-danger pull-right'), __('Confirma exclusão do registro # %s?', $this->Form->value('ProdutosVenda.id'))); ?>				</div>

			<?php echo $this->Form->end() ?>

	            
            </div>
		</div>
	</div>
</div>
