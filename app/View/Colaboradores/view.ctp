<div class="colaboradores index row">
<div class="actions col-md-10 col-md-offset-1">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
	             
 
 
 <a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Colaboradores"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Colaboradores </a>
	        			
						
								</ul>
	
	
	   
    </div><!-- /.box-body -->
</div>
</div>    
</div>

<div class="row">
	<div class="colaboradores  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Detalhes -  Colaborador'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	            
		<h3><?php  echo __('Colaborador');?></h3>
		 
			
			<table class="table table-bordered">
				
					<tr><th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['name']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('CPF'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['cpf']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['email']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Data de Nascimento'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['dt_nascimento']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('RG'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['rg']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Orgão Emissor'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['orgaoemissor']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Logradouro'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['logradouro']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Bairro'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['bairro']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Cidade'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['cidade']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Estado'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['estado']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Telefone 1'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['telefone_1']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Ramal 1'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['ramal_1']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Telefone 2'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['telefone_2']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Ramal 2'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['ramal_2']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Vinculo'); ?></th>
		<td>
			<?php echo h($colaborador['Vinculo']['name']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Grupo'); ?></th>
		<td>
			<?php echo h($colaborador['Grupo']['name']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Setor'); ?></th>
		<td>
			<?php echo h($colaborador['Setor']['name']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Banco'); ?></th>
		<td>
			<?php echo h($colaborador['Banco']['name']); ?>			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Agencia'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['agencia']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Conta'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['conta']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Escolaridade'); ?></th>
		<td>
			<?php echo h($colaborador['Escolaridade']['name']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Status'); ?></th>
		<td>
			<?php if($colaborador['Colaborador']['status']==0){echo '<span class="label label-default">Inativo</span>';} else {echo '<span class="label label-success">Ativo</span>';} ?>&nbsp;
		</td></tr>
		<tr><th><?php echo __('Data de Criação'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['created']); ?>
			&nbsp;
		</td></tr>
		<tr><th><?php echo __('Data Ult. Alteração'); ?></th>
		<td>
			<?php echo h($colaborador['Colaborador']['modified']); ?>
			&nbsp;
		</td></tr>
		</table>
	</div>
</div>

