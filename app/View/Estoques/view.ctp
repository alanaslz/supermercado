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
	             
 
 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Editar Estoque" href="<?php echo $this->Html->url(array('action' => 'edit',$estoque['Estoque']['id'])); ?>"> <i class='fa fa-pencil'></i> Estoque </a>
 
 <a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Estoques"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Estoques </a>
	                 
<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Estoque" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Estoque </a>
 	                 


						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Lojas"  href="<?php echo $this->Html->url(array('controller' => 'lojas', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Lojas </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Loja" href="<?php echo $this->Html->url(array('controller' => 'lojas','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Loja </a>
						
						
												
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Produtos"  href="<?php echo $this->Html->url(array('controller' => 'produtos', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Produtos </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Produto" href="<?php echo $this->Html->url(array('controller' => 'produtos','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Produto </a>
						
						
								</ul>
	
	
	   
    </div><!-- /.box-body -->
    
	</div>
</div>

<div class="row">
	<div class="estoques  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Detalhes -  Estoque'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	            
		<h3><?php  echo __('Estoque');?></h3>
		 
			
			<table class="table table-bordered">
				
					<tr><th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($estoque['Estoque']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Loja'); ?></th>
		<td>
			<?php echo $this->Html->link($estoque['Loja']['name'], array('controller' => 'lojas', 'action' => 'view', $estoque['Loja']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Produto'); ?></th>
		<td>
			<?php echo $this->Html->link($estoque['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $estoque['Produto']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Qtd Min'); ?></th>
		<td>
			<?php echo h($estoque['Estoque']['qtd_min']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Qtd Max'); ?></th>
		<td>
			<?php echo h($estoque['Estoque']['qtd_max']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($estoque['Estoque']['created']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($estoque['Estoque']['modified']); ?>
			&nbsp;
		</td></tr>
		</table>
	</div>
</div>

