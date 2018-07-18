<div class="row">
	      <div class="col-lg-12  col-md-12  col-xs-12">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner" style="text-align: center">
					<h3>Relatórios</h3>
                    <p>Módulo de Emissão de Relatórios</p>	                
                </div>
                <div class="icon">
                    <i class="fa fa-list"></i>
                </div>
                <div class="small-box-footer"></div>
            </div>
        </div>
</div>

<div class="row">
	<div class="actions col-md-12">
		<div class="box box-solid">
        	<div class="box-header with-border">
	            <h3 class="box-title"><?php echo __('Filtros - Relatório Geral de Passagens'); ?></h3>
	            <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <?php echo $this->Form->create('Relatorio',array('action'=>'passagens')); ?>
			<div class="box-body">
				
				
				            	
            	<div class="row">
				 
	            
	            	<div class="col-xs-12 col-md-6">
		            	<?php echo $this->Form->input('viagem_id', array('class' => 'form-control select2','empty'=>'Todos', 'placeholder' => __('Viagem Id')));?>

	            	</div>
	            	
	            		 
	            </div>
	            
	            
	            <div class="row">
					<div class="col-xs-6 col-md-3">							
						<?php echo $this->Form->input('dt_inicio', array('class' => 'form-control', 
							"type"=>"text",'placeholder' => __('dd/mm/aaaa'), 'label'=>'Data de Início', 'escape' => false));?>
					</div>
					<div class="col-xs-6 col-md-3">
						<?php echo $this->Form->input('dt_fim', array('class' => 'form-control', 
							"type"=>"text",'placeholder' => __('dd/mm/aaaa'), 'label'=>'Data de Fim', 'escape' => false));?>
					</div>
					 
					
	            </div>
				<div class="row">
					
					
					<div class="col-xs-12 col-md-6">
		            	<?php echo $this->Form->input('colaborador_id', array('class' => 'form-control select2','empty'=>'Todos', 'placeholder' => __('Colaborador Id')));?>

	            	</div>
	            	
				</div>
            	
            	 
            	
            	
            	<hr/>
            	
	        </div><!-- /.box-body -->
	         <div class="box-footer">
			 <button class="btn btn-block btn-default" type="submit"><i class="fa fa-search"></i>  Pesquisar</button>
        	
        	</div><!-- /.box-footer -->
          <?php  echo $this->Form->end(); ?>
    	</div>
	</div>
</div>






<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo __('Relatório de Passagens');?></h3>
			</div>
            <div class="box-body">
	            <table class="table table-bordered">
					<tbody>
					<tr>
						<th>Viagem</th>
						<th>Beneficiário</th>
						<th>Tipo Destino</th>
						<th>Vlr Passagem</th>
					
						<th>Ações</th>
											</tr>
					<?php
						
					if(!empty($passagens)) { 	
					
					foreach ($passagens as $passagem): ?>
					<tr>
						<td><?php echo $passagem['Viagem']['name'];?>&nbsp;</td>
						<td><?php echo $passagem['Colaborador']['name'];?>&nbsp;</td>
						<td><?php echo $passagem['Transporte']['name'];?>&nbsp;</td>
						
						<td><?php echo $passagem['Passagem']['valor'];?>&nbsp;</td>
						
						<td><?php echo $this->Html->link(__('Visualizar Detalhes'), array('controller'=>'viagens','action' => 'status', $passagem['Viagem']['id']), array('class' => 'btn btn-default btn-xs')); ?></td>
					</tr>
					<?php endforeach; 
						
						} else { ?>
						
						<tr>
						<td colspan="6">
							Nenhuma passagem encontrada! Verifique o filtro e tente novamente.
						</td>
				 
						 
					</tr>
							
							
					<?	} ?>
				</table>
<!--
    <div class="well">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</div>
-->

	<div class="paging btn-group">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array('class' => 'prev btn'), null, array('class' => 'prev disabled btn'));
		echo $this->Paginator->numbers(array('separator' => '', 'class' => 'btn', 'currentClass' => 'active'));
		echo $this->Paginator->next(__('Próxima') . ' >', array('class' => 'next btn'), null, array('class' => 'next disabled btn'));
	?>
	</div>
</div>
</div>

<script>
      $(function () {
	    
	    $("#RelatorioDtInicio").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/aaaa"}).datepicker({
				format: "dd/mm/yyy",
				autoclose: true,
				todayHighlight: true });
				
	    $("#RelatorioDtFim").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/aaaa"}).datepicker({
				format: "dd/mm/yyy",
				autoclose: true,
				todayHighlight: true });
  
	    $(".select2").select2();
	   });
	</script>	
