<div class="moduloOperacoes view">
<h2><?php  echo __('Modulo Operacao'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($moduloOperacao['ModuloOperacao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($moduloOperacao['ModuloOperacao']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modulo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($moduloOperacao['Modulo']['name'], array('controller' => 'modulos', 'action' => 'view', $moduloOperacao['Modulo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo h($moduloOperacao['ModuloOperacao']['modelo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action'); ?></dt>
		<dd>
			<?php echo h($moduloOperacao['ModuloOperacao']['action']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($moduloOperacao['ModuloOperacao']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($moduloOperacao['ModuloOperacao']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ordem'); ?></dt>
		<dd>
			<?php echo h($moduloOperacao['ModuloOperacao']['ordem']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Modulo Operacao'), array('action' => 'edit', $moduloOperacao['ModuloOperacao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Modulo Operacao'), array('action' => 'delete', $moduloOperacao['ModuloOperacao']['id']), null, __('Are you sure you want to delete # %s?', $moduloOperacao['ModuloOperacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modulo Operacoes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modulo Operacao'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modulos'), array('controller' => 'modulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modulo'), array('controller' => 'modulos', 'action' => 'add')); ?> </li>
	</ul>
</div>
