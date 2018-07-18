<?php // debug($produtos);?>

<div class="row">
	<div class="produtosVendas  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('VENDA DE CAIXA # '.$venda['Venda']['id']); ?> 
            	<?php echo $this->Html->link(__('Trocar Venda'), array('controller'=>'vendas', 'action' => 'trocar'), array('class' => 'btn btn-default btn-xs')); ?>
            	
            	</h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('ProdutosVenda', array('role' => 'form')); ?>
 
				<div class="form-group">
					<?php echo $this->Form->input('venda_id', array('class' => 'form-control', 'value'=>$venda['Venda']['id'], 'type'=>'hidden'));?>
				</div>
 	 

			<div class="row">
					<div class="col-md-2">
						<?php echo $this->Form->input('qtd', array('class' => 'form-control', 'label'=>false, 'value'=>1));?>
					</div>
					
					<div class="col-md-6">
						 <?php echo $this->Form->input('produto_id', array('class' => 'form-control select2', 'label'=>false, 'placeholder' => __('Produto Id')));?>
							
					</div>
					<div class="col-md-2">
						<?php echo $this->Form->submit(__('Adicionar'), array('class' => 'btn btn-primary','div'=>false)); ?>
					</div>
				
			</div>


			<?php echo $this->Form->end() ?>

	            
            </div>
		</div>
	</div>
</div>

<div class="row">
	<div class="vendas  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Detalhes -  Venda'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	            
	    
	    <table class="table table-bordered table-striped">
				<tr>
 		 <td>#</td>
		<th><?php echo __('CÓDIGO'); ?></th>
		<th><?php echo __('PRODUTO'); ?></th>
		<th><?php echo __('QTD.'); ?></th>
		<th><?php echo __('[R$] UNIT.'); ?></th>
		<th><?php echo __('[R$] TOTAL'); ?></th>
		<th><?php echo __('EXCLUIR'); ?></th>
	 
				</tr>
	    <?php
	
		$i = 1;
		foreach ($venda['Produto'] as $produto): ?>
		
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $produto['codigo'];?></td>
			<td><?php echo $produto['name'];?></td>
			<td><?php echo $produto['ProdutosVenda']['qtd'];?></td>
			<td><?php echo $produto['ProdutosVenda']['preco_unit'];?></td>
 
		 <td><?php echo $produto['ProdutosVenda']['qtd'] * $produto['ProdutosVenda']['preco_unit'] ;?> </td>
		 
		  
		 
		  <td> <?php echo $this->Form->postLink(__('Excluir'), array('action' => 'deleteProduto', $produto['ProdutosVenda']['id']), array('class' => 'btn btn-default btn-xs'), __('Confirma Exclusão do Registro # %s?', $produto['name'])); ?> </td>
			
		</tr>
		
	<?php
		$i++;
		 endforeach; ?>
             
                
	    </table>
	
	
            </div>
		</div>
	</div>
</div>
 
<div class="row">
	<div class="vendas  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('TOTAL VENDA'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
		 
              <h3 class="pull-right"> R$ <?php echo $venda['Venda']['vlr_total'];?> </h3>
                  
            </div>
		</div>
	</div>
</div>



