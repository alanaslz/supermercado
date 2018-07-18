<div class="estados index row">
<div class="actions col-md-10 col-md-offset-1">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
	             
 
 
 <a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Estados"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Estados </a>
	                 
 						
								</ul>
	
	
	   
    </div><!-- /.box-body -->
    
	</div>
</div>
</div>

<div class="row">
	<div class="estados  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Detalhes -  Estado'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	            
		<h3><?php  echo __('Estado');?></h3>
		 
			
			<table class="table table-bordered">
				
					<tr><th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($estado['Estado']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Nome'); ?></th>
		<td>
			<?php echo h($estado['Estado']['name']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Sigla'); ?></th>
		<td>
			<?php echo h($estado['Estado']['sigla']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Data de Criação'); ?></th>
		<td>
			<?php echo h($estado['Estado']['created']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Data Ult. Alteração'); ?></th>
		<td>
			<?php echo h($estado['Estado']['modified']); ?>
			&nbsp;
		</td></tr>
		</table>
	</div>
</div>
	</div>
</div>


<div class="row">
	<div class="estados  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Municipios Relacionados ');?></h3>
			<div class="btn-toolbar">
			 			</div>
	<?php if (!empty($estado['Municipio'])):?>
			<table class="table table-bordered">
				<tr>
							<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Regional Id'); ?></th>
		<th><?php echo __('Ibge'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
					<th class="actions"><?php echo __('Actions');?></th>
				</tr>
					<?php
		$i = 0;
		foreach ($estado['Municipio'] as $municipio): ?>
		<tr>
			<td><?php echo $municipio['id'];?></td>
			<td><?php echo $municipio['name'];?></td>
			<td><?php echo $municipio['estado_id'];?></td>
			<td><?php echo $municipio['regional_id'];?></td>
			<td><?php echo $municipio['ibge'];?></td>
			<td><?php echo $municipio['created'];?></td>
			<td><?php echo $municipio['modified'];?></td>
			<td class="actions">
			<div class="btn-toolbar">
				<div class="btn-group">
				<?php echo $this->Html->link(__('View'), array('controller' => 'municipios', 'action' => 'view', $municipio['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'municipios', 'action' => 'edit', $municipio['id']), array('class' => 'btn btn-mini')); ?>
				</div>
				<div class="btn-group">
			 
				</div>
			</div>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
	<?php endif; ?>

		</div>
	</div>
	
	</div>
</div>


