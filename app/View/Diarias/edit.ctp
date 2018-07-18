<?php  $usuario = $this->Session->read('Auth.User'); ?>
<div class="row">
	      <div class="col-lg-12  col-md-12  col-xs-12">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner" style="text-align: center">
					<h3>Diárias</h3>
                    <p>Módulo de Solicitação de Diárias</p>	                
                </div>
                <div class="icon">
                    <i class="fa fa-dollar"></i>
                </div>
                <div class="small-box-footer"></div>
            </div>
        </div>
</div>
				<div class="diarias index row">
	<div class="actions col-md-12">
		<div class="box box-solid">
	                <div class="box-header with-border">
		                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
		                <div class="box-tools">
	                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                  	</div>
	                </div>
	                
	                 <div class="box-body no-padding">
		            	<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Diárias"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Diárias </a>  
						
				    </div>
		</div>
	</div>
</div>  

<div class="row">
	<div class="diarias  col-md-12">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Editar Diária'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('Diaria', array('role' => 'form')); ?>
      
  				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => __('Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('viagem_id', array('class' => 'form-control', 'placeholder' => __('Viagem Id'),'empty'=>'Selecione a Viagem', 'disabled'=>true));?>
					<? echo $this->Form->hidden('viagem_id',array("value"=>$viagem_id));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('colaborador_id', array('class' => 'form-control select2', 'placeholder' => __('Colaborador Id'),'empty'=>'Selecione o Colaborador',));?>
				</div>
<!--
				<div class="form-group">
					<?php echo $this->Form->input('tdestino_id', array('class' => 'form-control', 'placeholder' => __('Tdestino Id')));?>
				</div>

				<div class="form-group">
					<?php echo $this->Form->input('escolaridade_id', array('class' => 'form-control', 'placeholder' => __('Escolaridade Id')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('grupo_id', array('class' => 'form-control', 'placeholder' => __('Grupo Id')));?>
				</div>-->
				<div class="form-group">
					<?php echo $this->Form->input('quantidade', array('class' => 'form-control', 'placeholder' => __('Quantidade')));?>
				</div>
<!--
				<div class="form-group">
					<?php echo $this->Form->input('valor', array('class' => 'form-control', 'placeholder' => __('Valor')));?>
				</div>
-->
				<div class="form-group">
					<?php echo $this->Form->input('observacao', array('class' => 'form-control','label' =>'Observação'));?>
				</div>
				<div class="col-xs-12 col-md-6 col-md-offset-6">
							<?php echo $this->Form->input('usuario_id', array(
								'class' => 'form-control', 
								'disabled'=>true, 
								'value'=> $usuario['id'],
								'label'=>'Usuário Autenticado', 
								'placeholder' => __('Usuario Id')));?>

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

<script>
      $(function () {
	  	$(".select2").select2();
	   });
	</script>	
