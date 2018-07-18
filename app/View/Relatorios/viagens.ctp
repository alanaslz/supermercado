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
	            <h3 class="box-title"><?php echo __('Filtros - Relatório Geral de Viagens'); ?></h3>
	            <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <?php echo $this->Form->create('Relatorio',array('action'=>'viagens')); ?>
			<div class="box-body">
				
				
				            	
            	<div class="row">
				 
	            
	            	<div class="col-xs-6 col-md-3">
		            	<?php echo $this->Form->input('programa_id', array('class' => 'form-control select2','empty'=>'Todos', 'placeholder' => __('Programa Id')));?>

	            	</div>
	            	<div class="col-xs-6 col-md-3">
		            	<?php echo $this->Form->input('plano_id', array('class' => 'form-control', 'empty'=>'Todos','placeholder' => __('Plano Id')));?>

	            	</div>
	            		<div class="col-xs-6 col-md-6">
		            		<?php echo $this->Form->input('agravo_id', array('class' => 'form-control select2', 'empty'=>'Todos',
			            		'options' => $agravos, 'label'=>'Agravos'));?>

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
					<div class="col-xs-6 col-md-3">
						<?php echo $this->Form->input('oficio', array('class' => 'form-control', 'placeholder' => __('Oficio')));?>
					</div>
					<div class="col-xs-6 col-md-3">
						<?php echo $this->Form->input('processo', array('class' => 'form-control', 'placeholder' => __('Processo')));?>
					</div>
					
	            </div>
				
            	
            	<div class="row">
	            	
	            	<div class="col-xs-6 col-md-3">
						<?php echo $this->Form->input('tdestino_id', array('class' => 'form-control', 'empty'=>'Todos', 'label'=>'Tipo do Destino', 
							'placeholder' => __('Tipo de Destino')));?>
	            	</div>
	            	<div class="col-xs-6 col-md-3">
	            		<?php echo $this->Form->input('origem_id', array('class' => 'form-control select2',  'empty'=>'Todos', 'options' => $municipios, 'placeholder' => __('Municipio Id')));?>
	            	</div>
	            	<div class="col-xs-6 col-md-6">
						<?php echo $this->Form->input('municipio_id', array('class' => 'form-control select2', 'empty'=>'Todos',
							'options' => $municipios, 'label'=>'Destinos da Viagem'));?>
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
				<h3 class="box-title"><?php echo __('Relatório de Viagens');?></h3>
			</div>
            <div class="box-body">
	            <table class="table table-bordered">
					<tbody>
					<tr>
						<th>#</th>
						<th>Viagem</th>
<!--
						<th>Total Passagens</th>
						<th>Total Diárias</th>
-->
						 
						<th></th>
					</tr>
					<?php
						
					if(!empty($viagens)) { 	
					
					foreach ($viagens as $viagem): ?>
					
					<? // debug($viagem);?>
					<tr>
						<td><?php echo $viagem['Viagem']['id'];?>&nbsp;</td>
						<td><?php echo $viagem['Viagem']['name'];?>&nbsp;</td>
<!--
						<td><?php echo $viagem['Viagem']['total_diarias'];?>&nbsp;</td>
						<td><?php echo $viagem['Viagem']['total_passagens'];?>&nbsp;</td>
				-->	    <td><?php echo $this->Html->link(__('Visualizar Detalhes'), array('controller'=>'viagens','action' => 'status', $viagem['Viagem']['id']), array('class' => 'btn btn-default btn-xs')); ?></td>
  <td><?php echo $this->Html->link(__('Diárias de Funcionarios'), array('controller'=>'relatorios','action' => 'funcionarios', 'ext' => 'pdf', $viagem['Viagem']['id']), array('class' => 'btn btn-default btn-xs')); ?></td>  
<td><?php echo $this->Html->link(__('Diárias de Terceiros'), array('controller'=>'relatorios','action' => 'terceiros', 'ext' => 'pdf', $viagem['Viagem']['id']), array('class' => 'btn btn-default btn-xs')); ?></td>  
					</tr>
					<?php endforeach; 
						
						} else { ?>
						
						<tr>
						<td colspan="6">
							Nenhuma viagem encontrada! Verifique o filtro e tente novamente
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
