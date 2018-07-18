<div class="lojas index row">
<div class="actions col-md-10 col-md-offset-1">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
	             
 
 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Editar Loja" href="<?php echo $this->Html->url(array('action' => 'edit',$loja['Loja']['id'])); ?>"> <i class='fa fa-pencil'></i> Loja </a>
 
 <a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Lojas"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Lojas </a>
	                 
<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Loja" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-plus'></i> Loja </a>
 	                 


		</ul>
	
	
	   
    </div><!-- /.box-body -->
    
	</div>
</div>

<div class="row">
	<div class="lojas  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Detalhes -  Loja'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	            
		<h3><?php  echo __('Loja');?></h3>
		 
			
			<table class="table table-bordered">
				
					<tr><th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($loja['Loja']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($loja['Loja']['name']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Endereco'); ?></th>
		<td>
			<?php echo h($loja['Loja']['endereco']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Cnpj'); ?></th>
		<td>
			<?php echo h($loja['Loja']['cnpj']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($loja['Loja']['created']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($loja['Loja']['modified']); ?>
			&nbsp;
		</td></tr>
		</table>
	</div>
</div>

