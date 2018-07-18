<div class="moduloUsuarios view row">
	<div class="actions span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
					<li><?php echo $this->Html->link(__('Edit Modulo Usuario'), array('action' => 'edit', $moduloUsuario['ModuloUsuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Modulo Usuario'), array('action' => 'delete', $moduloUsuario['ModuloUsuario']['id']), null, __('Are you sure you want to delete # %s?', $moduloUsuario['ModuloUsuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modulo Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modulo Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modulos'), array('controller' => 'modulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modulo'), array('controller' => 'modulos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
	<div class="span10">
		<h2><?php  echo __('Modulo Usuario');?></h2>
		<dl>
					<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($moduloUsuario['ModuloUsuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modulo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($moduloUsuario['Modulo']['name'], array('controller' => 'modulos', 'action' => 'view', $moduloUsuario['Modulo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($moduloUsuario['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $moduloUsuario['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($moduloUsuario['ModuloUsuario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($moduloUsuario['ModuloUsuario']['modified']); ?>
			&nbsp;
		</dd>
		</dl>
	</div>
</div>
