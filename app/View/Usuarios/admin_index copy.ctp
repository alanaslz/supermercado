<div class="usuarios index">
    <legend><?php echo __('Actions'); ?></legend>
    <div class="well2">
	<div class="btn-group">
		<a class='btn' href='<?php echo $this->Html->url(array('action' => 'add')); ?>'><i class='icon-plus'></i> Novo Usuário</a>
	</div>
</div>
    <div class="well3"> 
	<legend><?php echo __('Lista de Usuarios'); ?></legend>
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
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuario['Usuario']['id'])); ?> &nbsp;|&nbsp;
			<i class="icon-edit"></i>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>&nbsp;|&nbsp;
			<i class="icon-remove-circle"></i>
                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Você realmente deseja excluir  %s?', $usuario['Usuario']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
   
       <p>
          <ul class="pager" style="border-top:solid 1px #ccc;padding-top:15px;">
              <?php echo '<li class="previous">'. $this->paginator->prev('Anterior') .'</li>',
                 $this->paginator->numbers(),
                    '<li class="next">'. $this->paginator->next('Próximo').'</li>'
              ?>
	  </ul>	  
        </p>
 </div>  
</div>

