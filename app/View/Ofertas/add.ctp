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
		              
						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar Ofertas"  href="<?php echo $this->Html->url(array('action' => 'index')); ?>"> <i class='fa fa-list'></i> Ofertas </a>
	                 
<!--
						-->
	                 </div>
		</div>
	</div>
</div>  

<div class="row">
	<div class="lojas  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Adicionar Oferta'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('Oferta', array('role' => 'form')); ?>

				<div class="form-group">
				 
					
					<?php echo $this->Form->input('data', array('class' => 'form-control', 
							"type"=>"text",'placeholder' => __('dd/mm/aaaa'), 'label'=>'Data de Fim', 'escape' => false));?>
							
							
							
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('produto_id', array('class' => 'form-control select2', 'placeholder' => __('Produto')));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('percentual', array('class' => 'form-control', 'placeholder' => __('Percentual')));?>
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
	    
	    $("#OfertaData").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/aaaa"}).datepicker({
				format: "dd/mm/yyy",
				autoclose: true,
				todayHighlight: true });
		   });
	</script>	
	
	
