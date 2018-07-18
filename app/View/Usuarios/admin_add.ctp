<div class="row">
	      <div class="col-lg-12  col-md-12  col-xs-12">
            <!-- small box -->
            <div class="small-box bg-purple">
                <div class="inner" style="text-align: center">
					<h3>Usuários</h3>
                    <p>Módulo de Gerenciamento de Usuários</p>	                
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="small-box-footer"></div>
            </div>
        </div>
</div>


<div class="usuarios index row">
<div class="actions col-md-12">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
                 
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Listar Usuário" href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Usuário </a>
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Ir para Página Inicial" href="<?php echo $this->Html->url(array('controller'=>'home',
	                 'admin'=>false, 'action' => 'index')); ?>"> <i class='fa fa-home'></i> Página Inicial </a>

    
    </div><!-- /.box-body -->
    
	</div>
</div>

<div class="usuarios col-md-5">
	<div class="box box-primary">
                <div class="box-header with-border">
	     
	                 <h3 class="box-title"><?php echo __('Cadastro de Usuário');?></h3>
                </div>
                <div class="box-body">
	<?php echo $this->Form->create('Usuario'); ?>
 
		
         <div class="col-md-12">
		 		<?php echo $this->Form->input('name',array('label'=>'Nome','class' => 'form-control', 'type'=>'text'));?>
           
		 		<?php echo $this->Form->input('username',array('label'=>'Username:', 'class' => 'form-control'));?>
     
				 
				<?php echo $this->Form->input('password',array('label'=>'Senha:','class' => 'form-control'));?>
		               
<!-- 				<?php echo $this->Form->input('role_id',array('label'=>'Perfil','class' => 'form-control'));?> -->
		              
				<?php echo $this->Form->input('email',array('label'=>'e-mail:','class' => 'form-control'));?>
            
			<?php echo $this->Form->input('status', array('class'=>'form-control','options' => array(0=>'Inativo', 1=>'Ativo'))); ?>
                <hr>
	</div>
                   <button type="submit" class="btn btn-primary" style="width: 100px;"><i class="icon-check icon-white"></i> Salvar</button>
	
	</fieldset>

                </div>
	</div>
</div>
<div class="usuarios col-md-5">
	<div class="box box-primary">
        <div class="box-header with-border">
	    	<h3 class="box-title"><?php echo __('Módulos');?></h3>
        </div>
        <div class="box-body">
	        <div class="form-group">
				<div class="col-md-11 col-md-offset-1">
					 <? echo $this->Form->input('Modulo',array(
		            'label' => false,
		            'type' => 'select',
		            'multiple' => 'checkbox',
		            'options' => $modulos,
		            'selected' => $this->Html->value('Usuario.Modulo'),
		        )); ?>
				</div>
	        </div>
        </div>
	</div>
</div>
<?php echo $this->Form->end(); ?>


<script>
      $(function () {
	  	$(".select2").select2();
	   });
	</script>	
	
	