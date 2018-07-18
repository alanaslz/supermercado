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
                 
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar Usuário" href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> <i class='fa fa-user'></i> Usuário </a>
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Ir para Página Inicial" href="<?php echo $this->Html->url(array('controller'=>'home',
	                 'admin'=>false,'action' => 'index')); ?>"> <i class='fa fa-home'></i> Página Inicial </a>

    
    </div><!-- /.box-body -->
    
	</div>
</div>
 
	<div class="col-md-12">
	<div class="box box-primary">
                <div class="box-header with-border">
	     
	                 <h3 class="box-title"><?php echo __('Lista de Usuários');?></h3>
                </div>
                <div class="box-body">
	                
 
	<table class="table table-bordered">
	<table cellpadding="0" cellspacing="0" class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name','Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('role_id','Perfil'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('status','Ativo'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Criado'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($usuario['Role']['name'], array('controller' => 'roles', 'action' => 'view', $usuario['Role']['id'])); ?>
		</td>
		<td><?php echo h($usuario['Usuario']['email']); ?>&nbsp;</td>
		<td><?php if($usuario['Usuario']['status']){echo 'Sim';} else {echo 'Não';} ?>&nbsp;</td>
                <td><?php echo date('d/m/Y',strtotime($usuario['Usuario']['created'])); ?>&nbsp;</td>
		<td class="actions">
                    <i class="icon-eye-open"></i>
		
			<i class="icon-edit"></i>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>&nbsp;|&nbsp;
			<i class="icon-remove-circle"></i>
                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Você realmente deseja excluir  %s?', $usuario['Usuario']['name'])); ?>
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






