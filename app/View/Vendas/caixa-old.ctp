<? $total = 256;?>


<?php echo $this->Form->create('ProdutosVenda', array('role' => 'form')); ?>

<div class="vendas index row">
	<div class="vendas  col-md-10 col-md-offset-1">
			<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('VENDA DE CAIXA'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
	             
	             <div class="form-group">
					<?php echo $this->Form->input('venda_id', array('class' => 'form-control', 'placeholder' => __('Venda Id'), 'value'=>$venda_id));?>
				</div>
				
				
					 <div class="form-group col-md-5">
						<?php echo $this->Form->input('Produto', array('class' => 'form-control select2', 'label'=>false,'placeholder' => 'Modified'));?>
						  
					</div>
		   
					<div class="form-group  col-md-5">
						<?php echo $this->Form->submit(__('Adicionar'), array('class' => 'btn btn-primary','div'=>false)); ?>
					</div>
					
				
    			</div><!-- /.box-body -->
    
	</div>
</div>
</div>

<?php echo $this->Form->end() ?>


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
	            
	    
	    <table class="table table-bordered">
				<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('CÓDIGO'); ?></th>
		<th><?php echo __('PRODUTO'); ?></th>
		<th><?php echo __('QTD.'); ?></th>
		<th><?php echo __('[R$] UNIT.'); ?></th>
		<th><?php echo __('[R$] TOTAL'); ?></th>
	 
				</tr>
				
				
	    
	    <?php
		$i = 0;
		foreach ($venda['Produto'] as $produto): ?>
		<tr>
			<td><?php echo $produto['id'];?></td>
			<td><?php echo $produto['codigo'];?></td>
			<td><?php echo $produto['name'];?></td>
			<td></td>
			<td></td>
		 <td></td>
			
		</tr>
	<?php endforeach; ?>
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
	            <?php echo $total;?>
            </div>
		</div>
	</div>
</div>


<script>
      $(function () {
	  	$(".select2").select2();
	   });
	</script>