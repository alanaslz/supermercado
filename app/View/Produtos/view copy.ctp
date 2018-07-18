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
	             
 
 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Editar Produto" href="<?php echo $this->Html->url(array('action' => 'edit',$produto['Produto']['id'])); ?>"> <i class='fa fa-pencil'></i> Produto </a>
 
 <a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Produtos"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Produtos </a>
	                 
<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Produto" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Produto </a>
 	                 


						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Categorias"  href="<?php echo $this->Html->url(array('controller' => 'categorias', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Categorias </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Categoria" href="<?php echo $this->Html->url(array('controller' => 'categorias','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Categoria </a>
						
						
												
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Marcas"  href="<?php echo $this->Html->url(array('controller' => 'marcas', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Marcas </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Marca" href="<?php echo $this->Html->url(array('controller' => 'marcas','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Marca </a>
						
						
												
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Unidades"  href="<?php echo $this->Html->url(array('controller' => 'unidades', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Unidades </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Unidade" href="<?php echo $this->Html->url(array('controller' => 'unidades','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Unidade </a>
						
						
												
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Estoques"  href="<?php echo $this->Html->url(array('controller' => 'estoques', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Estoques </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Estoque" href="<?php echo $this->Html->url(array('controller' => 'estoques','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Estoque </a>
						
						
												
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Vendas"  href="<?php echo $this->Html->url(array('controller' => 'vendas', 'action' => 'index')); ?>"> <i class='fa fa-list'></i> Vendas </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Venda" href="<?php echo $this->Html->url(array('controller' => 'vendas','action' => 'add')); ?>"> <i class='fa fa-plus'></i> Venda </a>
						
						
								</ul>
	
	
	   
    </div><!-- /.box-body -->
    
	</div>
</div>

<div class="row">
	<div class="produtos  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Detalhes -  Produto'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	            
		<h3><?php  echo __('Produto');?></h3>
		 
			
			<table class="table table-bordered">
				
					<tr><th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($produto['Produto']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Codigo'); ?></th>
		<td>
			<?php echo h($produto['Produto']['codigo']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($produto['Produto']['name']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Preco'); ?></th>
		<td>
			<?php echo h($produto['Produto']['preco']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Categoria'); ?></th>
		<td>
			<?php echo $this->Html->link($produto['Categoria']['name'], array('controller' => 'categorias', 'action' => 'view', $produto['Categoria']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Marca'); ?></th>
		<td>
			<?php echo $this->Html->link($produto['Marca']['name'], array('controller' => 'marcas', 'action' => 'view', $produto['Marca']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Unidade'); ?></th>
		<td>
			<?php echo $this->Html->link($produto['Unidade']['name'], array('controller' => 'unidades', 'action' => 'view', $produto['Unidade']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($produto['Produto']['status']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($produto['Produto']['created']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($produto['Produto']['modified']); ?>
			&nbsp;
		</td></tr>
		</table>
	</div>
</div>
	<div class="row">
		<div class="related col-md-10 offset1">
			<hr>
			<h3><?php echo __('Estoques Relacionados ');?></h3>
			<div class="btn-toolbar">
			<?php echo $this->Html->link(__('Adicionar Estoque'), array('controller' => 'estoques', 'action' => 'add'), array('class'=>'btn btn-mini'));?>			</div>
	<?php if (!empty($produto['Estoque'])):?>
			<table class="table table-bordered">
				<tr>
							<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Loja Id'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Qtd Min'); ?></th>
		<th><?php echo __('Qtd Max'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
					<th class="actions"><?php echo __('Actions');?></th>
				</tr>
					<?php
		$i = 0;
		foreach ($produto['Estoque'] as $estoque): ?>
		<tr>
			<td><?php echo $estoque['id'];?></td>
			<td><?php echo $estoque['loja_id'];?></td>
			<td><?php echo $estoque['produto_id'];?></td>
			<td><?php echo $estoque['qtd_min'];?></td>
			<td><?php echo $estoque['qtd_max'];?></td>
			<td><?php echo $estoque['created'];?></td>
			<td><?php echo $estoque['modified'];?></td>
			<td class="actions">
			<div class="btn-toolbar">
				<div class="btn-group">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estoques', 'action' => 'view', $estoque['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estoques', 'action' => 'edit', $estoque['id']), array('class' => 'btn btn-mini')); ?>
				</div>
				<div class="btn-group">
				<?php echo $this->Html->link(__('Delete'), array('controller' => 'estoques', 'action' => 'delete', $estoque['id']), array('class' => 'btn btn-danger btn-mini'), __('Are you sure you want to delete # %s?', $estoque['id'])); ?>
				</div>
			</div>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
	<?php endif; ?>

		</div>
	</div>
	<div class="row">
		<div class="related col-md-10 offset1">
			<hr>
			<h3><?php echo __('Vendas Relacionados ');?></h3>
			<div class="btn-toolbar">
			<?php echo $this->Html->link(__('Adicionar Venda'), array('controller' => 'vendas', 'action' => 'add'), array('class'=>'btn btn-mini'));?>			</div>
	<?php if (!empty($produto['Venda'])):?>
			<table class="table table-bordered">
				<tr>
							<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Vlr Total'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
					<th class="actions"><?php echo __('Actions');?></th>
				</tr>
					<?php
		$i = 0;
		foreach ($produto['Venda'] as $venda): ?>
		<tr>
			<td><?php echo $venda['id'];?></td>
			<td><?php echo $venda['usuario_id'];?></td>
			<td><?php echo $venda['vlr_total'];?></td>
			<td><?php echo $venda['status'];?></td>
			<td><?php echo $venda['created'];?></td>
			<td><?php echo $venda['modified'];?></td>
			<td class="actions">
			<div class="btn-toolbar">
				<div class="btn-group">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vendas', 'action' => 'view', $venda['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vendas', 'action' => 'edit', $venda['id']), array('class' => 'btn btn-mini')); ?>
				</div>
				<div class="btn-group">
				<?php echo $this->Html->link(__('Delete'), array('controller' => 'vendas', 'action' => 'delete', $venda['id']), array('class' => 'btn btn-danger btn-mini'), __('Are you sure you want to delete # %s?', $venda['id'])); ?>
				</div>
			</div>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
	<?php endif; ?>

		</div>
	</div>

