 <div class="row">
	<div class="viagens  col-md-12">
		<div class="box  box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Selecione uma Viagem'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	            
            <table class="table table-striped table-hover table-bordered">
	<tbody>
	<tr>
		<th>#</th>
		<th>Descrição Curta</th>
    	<th>Ofício</th>
    	<th>processo</th>
    	<th><Data Início</th>
    	<th>Data de Fim</th>
    	<th>Origem</th>
    	<th></th>
    	<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
	foreach ($viagens as $viagem): ?>
	<tr style="cursor: pointer;" onclick="window.location.href = '<?php echo $this->Html->url(array('controller'=>'diarias', 'action' => 'add', $viagem['Viagem']['id']));?>'">
		<td><?php echo h($viagem['Viagem']['id']); ?>&nbsp;</td>
		<td><?php echo h($viagem['Viagem']['name']); ?>&nbsp;</td>
		<td><?php echo h($viagem['Viagem']['oficio']); ?>&nbsp;</td>
		<td><?php echo h($viagem['Viagem']['processo']); ?>&nbsp;</td>
		<td><?php echo h($this->Time->format($viagem['Viagem']['dt_inicio'], '%d/%m/%Y')); ?>&nbsp;</td>
		<td><?php echo h($this->Time->format($viagem['Viagem']['dt_fim'], '%d/%m/%Y')); ?>&nbsp;</td>
		 
        <td>
			<?php echo $this->Html->link($viagem['Origem']['name'], array('controller' => 'municipios', 'action' => 'view', $viagem['Origem']['id'])); ?>
		</td>


		<td>
		
		<?php 
		switch ($viagem['Viagem']['status']) {
		    case 'AN':
		        echo '<span class="label label-warning">Análise</span>';
		        break;
		    case 'RE':
		        echo '<span class="label label-danger">Reprovada</span>';
		        break;
		    case 'AP':
		        echo '<span class="label label-success">Aprovada</span>';
		        break;
		     default: 
		       echo '<span class="label label-info">Edição</span>';
		} ?>

 		
		
		</td>
		<td class="actions">
			<div class="btn-toolbar">
					<?php echo $this->Html->link(__('Selecione'), array('controller'=>'diarias', 'action' => 'add', $viagem['Viagem']['id']), array('class' => 'btn btn-default btn-xs')); ?>
					
				
			</div>
		</td>
	</tr>
<?php endforeach; ?>
	</table>  

<div class="paging btn-group">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array('class' => 'prev btn'), null, array('class' => 'prev disabled btn'));
		echo $this->Paginator->numbers(array('separator' => '', 'class' => 'btn', 'currentClass' => 'active'));
		echo $this->Paginator->next(__('Próxima') . ' >', array('class' => 'next btn'), null, array('class' => 'next disabled btn'));
	?>
	</div>


            
            </div>
		</div>
	</div>
 </div>



