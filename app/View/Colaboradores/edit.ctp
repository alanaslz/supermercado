 <div class="row">
					<div class="colaboradores  col-md-10 col-md-offset-1">
						<div class="box box-solid">
							<div class="box-header with-border">
				            	<h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
				            	
								<div class="box-tools">
				                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				              	</div>
				            </div>
				            <div class="box-body">
					            
					            <a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Colaboradores"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Colaboradores </a>

				            </div><!-- box-row  -->
				            
				            
						</div><!-- box box-solid  -->
						
					</div>
				</div> <!-- row  -->
						
						 

	           	<?php echo $this->Form->create('Colaborador', array('role' => 'form')); ?>
     


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
					            
					            <div class="form-group">
									<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => __('Id')));?>
							</div>


					            
					            <?php include('dadospessoais.ctp'); ?>
					            
					            
				            </div><!-- box-row  -->
				            
				            
						</div><!-- box box-solid  -->
						
					</div>
				</div> <!-- row  -->
				
				<div class="row">
				<div class="colaboradores  col-md-10 col-md-offset-1">
					<div class="box box-solid">
						<div class="box-header with-border">
			            	<h3 class="box-title"><?php echo __('Dados Profissionais'); ?></h3>
			            	
							<div class="box-tools">
			                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			              	</div>
			            </div>
			            <div class="box-body">
				            <?php include('dadosprofissionais.ctp'); ?>
				            
			            </div><!-- box-row  -->
			            
			            
					</div><!-- box box-solid  -->
					
				</div>
			</div> <!-- row  -->
			
			<div class="row">
					<div class="colaboradores  col-md-10 col-md-offset-1">
						<div class="box box-solid">
							<div class="box-header with-border">
				            	<h3 class="box-title"><?php echo __('Endereços'); ?></h3>
				            	
								<div class="box-tools">
				                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				              	</div>
				            </div>
				            <div class="box-body">
					            
					            <?php include('enderecos.ctp'); ?>
				            </div> <!-- box-row  -->
				            
				            
						</div><!-- box box-solid  -->
						
					</div>
				</div> <!-- row  -->
				
				<div class="row">
				<div class="colaboradores  col-md-10 col-md-offset-1">
					<div class="box box-solid">
						<div class="box-header with-border">
			            	<h3 class="box-title"><?php echo __('Telefones'); ?></h3>
			            	
							<div class="box-tools">
			                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			              	</div>
			            </div>
			            <div class="box-body">
				            <?php include('telefones.ctp'); ?>
				            
			            </div><!-- box-row  -->
			            
			            
					</div><!-- box box-solid  -->
					
				</div>
			</div> <!-- row  -->
			
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
					            <?php include('dadosbancarios.ctp'); ?>
					            
				            </div> <!-- box-row  -->
				            
				            
						</div><!-- box box-solid  -->
						
					</div>
				</div> <!-- row  -->
				
				
				<div class="row">
					<div class="colaboradores  col-md-10 col-md-offset-1">
						<div class="box box-solid">
							
				            <div class="box-body">
					            <div class="form-group">
					<?php echo $this->Form->submit(__('Submeter'), array('class' => 'btn btn-primary','div'=>false)); ?>
					
					<?php echo $this->Form->end() ?>
					
<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Colaborador.id')), 
			                 	array('class'=>'btn btn-danger pull-right'), __('Confirma exclusão do registro # %s?', $this->Form->value('Colaborador.id'))); ?>				
			           </div>
					            
				            </div></div> <!-- box-row  -->
				            
				            
						</div></div> <!-- box box-solid  -->
						
					</div>
				</div> <!-- row  -->
 

					
					
  
<!--
 <script type="text/javascript">
	$(document).ready(function(){
		$("#ColaboradorDtNascimento").mask("99/99/9999");
	});
</script>
-->


