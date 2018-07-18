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
		                		                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Colaborador.id')), 
			                 	array('class'=>'btn btn-app'), __('Are you sure you want to delete # %s?', $this->Form->value('Colaborador.id'))); ?>												
						<a class="btn btn-app" href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Colaboradores </a>
	                 
																
						<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'vinculos','action' => 'index')); ?>"> 
							 <i class='fa fa-list'></i> Vínculos  </a>
					 
						<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'vinculos','action' => 'add')); ?>"> 
						  <i class='fa fa-plus'></i> Vinculo </a>
	
																
						<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'setores','action' => 'index')); ?>"> 
							 <i class='fa fa-list'></i> Setores </a>
					 
						<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'setores','action' => 'add')); ?>"> 
						  <i class='fa fa-plus'></i> Setor </a>
	
																
						<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'bancos','action' => 'index')); ?>"> 
							 <i class='fa fa-list'></i> Bancos </a>
					 
						<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'bancos','action' => 'add')); ?>"> 
						  <i class='fa fa-plus'></i> Banco </a>
	
																
						<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'escolaridades','action' => 'index')); ?>"> 
							 <i class='fa fa-list'></i> Escolaridades </a>
					 
						<a class="btn btn-app" href="<?php echo $this->Html->url(array('controller' => 'escolaridades','action' => 'add')); ?>"> 
						  <i class='fa fa-plus'></i> Escolaridade </a>
	
							                 </div>
		</div>
	</div>
</div>  

<div class="row">
	<div class="colaboradores  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Dados Pessoais'); ?></h3>
            	
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('Colaborador', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => __('Id')));?>
				</div>
			 
<!-- 			 	<?php echo $this->Form->input('status', array('class'=>'form-control','options' => array('Ativo', 'Inativo'),'empty' => '(Selecione o Status)')); ?> -->
				
				<div class="row">
					
					<div class="col-xs-12 col-md-8">
					<?php echo $this->Form->input('name', array('class' => 'form-control',  'label' => 'Nome', 'placeholder' => __('Nome')));?>
					</div>

					<div class="col-xs-12 col-md-4">
					   
					    
					     <?php echo $this->Form->input('dt_nascimento', array('class' => '', 'placeholder' => __('Dt Nascimento')));?>
					     
				   </div>
				</div>
				
				
				
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<?php echo $this->Form->input('username', array('class' => 'form-control', 'label' => 'CPF','placeholder' => __('CPF')));?>
					</div>
                    <div class="col-xs-12 col-md-4">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => __('Email')));?>

                    </div>
                     
                  </div>
                  
				<div class="row">
				
                    <div class="col-xs-12 col-md-4">
						<?php echo $this->Form->input('rg', array('class' => 'form-control', 'placeholder' => __('Rg')));?>
					 </div>
                    <div class="col-xs-12 col-md-4">
                      <?php echo $this->Form->input('orgaoemissor', array('class' => 'form-control', 'placeholder' => __('Orgaoemissor')));?>

                    </div>
                     <div class="col-xs-12 col-md-4">
                    

                    </div>
                    
                     
                  </div>
                  
                  
            
            
            </div>
            
           
            
		</div>
		
		
		
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Dados Profissionais'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	            
	            <div class="row">
	              <div class="col-xs-12 col-md-4">
                      <?php echo $this->Form->input('escolaridade_id', array('class' => 'form-control', 'placeholder' => __('Escolaridade Id')));?>
				  </div>
                 <div class="col-xs-12 col-md-4"> 
	                <?php echo $this->Form->input('vinculo_id', array('class' => 'form-control','label'=>'Vínculos / Empresa ', 'placeholder' => __('Vinculo Id')));?>
	             </div>
	             <div class="col-xs-12 col-md-4">
		             <?php echo $this->Form->input('grupo_id', array('class' => 'form-control', 'placeholder' => __('Grupo Id')));?>
	             </div>
            </div>
             <div class="row">
	              <div class="col-xs-12 col-md-4">
            	
				 
					<?php echo $this->Form->input('setor_id', array('class' => 'form-control', 'placeholder' => __('Setor Id')));?>
				</div>
             </div>
				
				
		</div>
		</div>




		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Endereço'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
				
				<div class="form-group">
					<?php echo $this->Form->input('logradouro', array('class' => 'form-control', 'placeholder' => __('Logradouro')));?>
				</div>
				
				<div class="row">
				
                    <div class="col-xs-12 col-md-4">
	                     <?php echo $this->Form->input('bairro', array('class' => 'form-control', 'placeholder' => __('Bairro')));?>
				</div>
				<div class="col-xs-12 col-md-4">
					<?php echo $this->Form->input('cidade', array('class' => 'form-control', 'placeholder' => __('Cidade')));?>
				</div>
				<div class="col-xs-12 col-md-4">
					<?php echo $this->Form->input('estado', array('class' => 'form-control', 'placeholder' => __('Estado')));?>
				</div>
				</div>
				
            </div>
		</div>
			
				
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Telefones'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">		
			 
				
				
				<div class="row">
                    <div class="col-xs-5">
						<?php echo $this->Form->input('telefone_1', array('class' => 'form-control', 'placeholder' => __('Telefone 1')));?>
					 </div>
                    <div class="col-xs-2">
                      <?php echo $this->Form->input('ramal_1', array('class' => 'form-control', 'placeholder' => __('Ramal 1')));?>

                    </div>
                     
                  </div>
                  	<div class="row">
                    <div class="col-xs-5">
						<?php echo $this->Form->input('telefone_2', array('class' => 'form-control', 'placeholder' => __('Telefone 2')));?>
					 </div>
                    <div class="col-xs-2">
                      <?php echo $this->Form->input('ramal_2', array('class' => 'form-control', 'placeholder' => __('Ramal 2')));?>

                    </div>
                     
                  </div>
                  
                  
				
				
							 				
				
            </div>
		</div>
		
		<div class="row">
	<div class="colaboradores  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Dados Bancários'); ?></h3>
            	
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	             
			
				<div class="form-group">
					<?php echo $this->Form->input('banco_id', array('class' => 'form-control', 'placeholder' => __('Banco Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('agencia', array('class' => 'form-control', 'placeholder' => __('Agencia')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('conta', array('class' => 'form-control', 'placeholder' => __('Conta')));?>
				</div>
				<div class="form-group">
					
				</div>
				
<hr/>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submeter'), array('class' => 'btn btn-primary','div'=>false)); ?>
				</div>

			<?php echo $this->Form->end() ?>

	            
            </div>
		</div>
	</div>
</div>
