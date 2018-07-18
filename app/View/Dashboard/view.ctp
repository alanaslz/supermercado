<div class="bancos index row">
<div class="actions col-md-10 col-md-offset-1">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
	             
 
 
 <a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Bancos"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Bancos </a>
	  
		</ul>
	
	
	   
    </div><!-- /.box-body -->
    
	</div>
</div>
</div>
<div class="row">
	<div class="bancos  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Detalhes -  Banco'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	            
		<h3><?php  echo __('Banco');?></h3>
		 
			
			<table class="table table-bordered">
				
					<tr><th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($banco['Banco']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Código'); ?></th>
		<td>
			<?php echo h($banco['Banco']['codigo']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Nome'); ?></th>
		<td>
			<?php echo h($banco['Banco']['name']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($banco['Banco']['status']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Data Criação'); ?></th>
		<td>
			<?php echo h($banco['Banco']['created']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Data Ult. Alteração'); ?></th>
		<td>
			<?php echo h($banco['Banco']['modified']); ?>
			&nbsp;
		</td></tr>
		</table>
	</div>
</div>

