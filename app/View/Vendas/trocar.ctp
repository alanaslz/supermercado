<div class="vendas index row">
<div class="actions col-md-10 col-md-offset-1">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
                 
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Iniciar Venda" href="<?php echo $this->Html->url(array('action' => 'iniciar')); ?>"> <i class='fa fa-plus'></i> Iniciar Venda </a>
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Ir para Página Inicial" href="<?php echo $this->Html->url(array('controller'=>'home','action' => 'index')); ?>"> <i class='fa fa-home'></i> Página Inicial </a>

    
    </div><!-- /.box-body -->
    
	</div>
</div>
 
	<div class="col-md-10  col-md-offset-1">
	<div class="box box-primary">
                <div class="box-header with-border">
	     
	                 <h3 class="box-title"><?php echo __('Vendas');?></h3>
                </div>
                <div class="box-body">
	                
 
	<table class="table table-bordered">
	<tbody>
	<tr>
		<th><?php echo $this->Paginator->sort('id','');?></th>	  	
		<th><?php echo $this->Paginator->sort('usuario_id','');?></th>
		<th><?php echo $this->Paginator->sort('vlr_total','');?></th>
		<th><?php echo $this->Paginator->sort('status','');?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	
	<?php foreach ($vendas as $venda): ?>
	<tr>
		<td><?php echo h($venda['Venda']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($venda['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $venda['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($venda['Venda']['vlr_total']); ?>&nbsp;</td>
		<td><?php echo h($venda['Venda']['status']); ?>&nbsp;</td>
		<td class="actions">
			<div class="btn-toolbar">
					<?php echo $this->Html->link(__('CAIXA'), array('controller' => 'caixa', 'action' => 'seleciona', $venda['Venda']['id']), array('class' => 'btn btn-default btn-xs')); ?>
								</div>
		</td>
	</tr>
<?php endforeach; ?>
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

