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
	             
 
 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Editar Venda" href="<?php echo $this->Html->url(array('action' => 'edit',$venda['Venda']['id'])); ?>"> <i class='fa fa-pencil'></i> Venda </a>
 
 <a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Vendas"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Vendas </a>
	                 
<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Venda" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Venda </a>
 	                 


						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Usuarios"  href="<?php echo $this->Html->url(array('controller' => 'usuarios', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Usuarios </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Usuario" href="<?php echo $this->Html->url(array('controller' => 'usuarios','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Usuario </a>
						
						
												
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Produtos"  href="<?php echo $this->Html->url(array('controller' => 'produtos', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Produtos </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Produto" href="<?php echo $this->Html->url(array('controller' => 'produtos','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Produto </a>
						
						
								</ul>
	
	
	   
    </div><!-- /.box-body -->
    
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
	            
		<h3><?php  echo __('Venda');?></h3>
		 
			
			<table class="table table-bordered">
				
					<tr><th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($venda['Venda']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Usuario'); ?></th>
		<td>
			<?php echo $this->Html->link($venda['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $venda['Usuario']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Vlr Total'); ?></th>
		<td>
			<?php echo h($venda['Venda']['vlr_total']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($venda['Venda']['status']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($venda['Venda']['created']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($venda['Venda']['modified']); ?>
			&nbsp;
		</td></tr>
		</table>
	</div>
</div>
	<div class="row">
		<div class="related col-md-10 offset1">
			<hr>
			<h3><?php echo __('Produtos Relacionados ');?></h3>
			<div class="btn-toolbar">
			<?php echo $this->Html->link(__('Adicionar Produto'), array('controller' => 'produtos', 'action' => 'add'), array('class'=>'btn btn-mini'));?>			</div>
	<?php if (!empty($venda['Produto'])):?>
			<table class="table table-bordered">
				<tr>
							<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Marca Id'); ?></th>
		<th><?php echo __('Unidade Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
					<th class="actions"><?php echo __('Actions');?></th>
				</tr>
					<?php
		$i = 0;
		foreach ($venda['Produto'] as $produto): ?>
		<tr>
			<td><?php echo $produto['id'];?></td>
			<td><?php echo $produto['codigo'];?></td>
			<td><?php echo $produto['name'];?></td>
			<td><?php echo $produto['categoria_id'];?></td>
			<td><?php echo $produto['marca_id'];?></td>
			<td><?php echo $produto['unidade_id'];?></td>
			<td><?php echo $produto['status'];?></td>
			<td><?php echo $produto['created'];?></td>
			<td><?php echo $produto['modified'];?></td>
			<td class="actions">
			<div class="btn-toolbar">
				<div class="btn-group">
				<?php echo $this->Html->link(__('View'), array('controller' => 'produtos', 'action' => 'view', $produto['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'produtos', 'action' => 'edit', $produto['id']), array('class' => 'btn btn-mini')); ?>
				</div>
				<div class="btn-group">
				<?php echo $this->Html->link(__('Delete'), array('controller' => 'produtos', 'action' => 'delete', $produto['id']), array('class' => 'btn btn-danger btn-mini'), __('Are you sure you want to delete # %s?', $produto['id'])); ?>
				</div>
			</div>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
	<?php endif; ?>

		</div>
	</div>

