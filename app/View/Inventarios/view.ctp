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
	             
 
 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Editar Inventario" href="<?php echo $this->Html->url(array('action' => 'edit',$inventario['Inventario']['id'])); ?>"> <i class='fa fa-pencil'></i> Inventario </a>
 
 <a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Inventarios"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Inventarios </a>
	                 
<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Inventario" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Inventario </a>
 	                 


						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Estoques"  href="<?php echo $this->Html->url(array('controller' => 'estoques', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Estoques </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Estoque" href="<?php echo $this->Html->url(array('controller' => 'estoques','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Estoque </a>
						
						
								</ul>
	
	
	   
    </div><!-- /.box-body -->
    
	</div>
</div>

<div class="row">
	<div class="inventarios  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Detalhes -  Inventario'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	            
		<h3><?php  echo __('Inventario');?></h3>
		 
			
			<table class="table table-bordered">
				
					<tr><th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($inventario['Inventario']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Estoque'); ?></th>
		<td>
			<?php echo $this->Html->link($inventario['Estoque']['id'], array('controller' => 'estoques', 'action' => 'view', $inventario['Estoque']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Qtd'); ?></th>
		<td>
			<?php echo h($inventario['Inventario']['qtd']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Preco Custo'); ?></th>
		<td>
			<?php echo h($inventario['Inventario']['preco_custo']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Preco Venda'); ?></th>
		<td>
			<?php echo h($inventario['Inventario']['preco_venda']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($inventario['Inventario']['created']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($inventario['Inventario']['modified']); ?>
			&nbsp;
		</td></tr>
		</table>
	</div>
</div>

