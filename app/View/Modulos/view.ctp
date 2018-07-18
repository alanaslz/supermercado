<div class="modulos view row">
	<div class="actions span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
					<li><?php echo $this->Html->link(__('Edit Modulo'), array('action' => 'edit', $modulo['Modulo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Modulo'), array('action' => 'delete', $modulo['Modulo']['id']), null, __('Are you sure you want to delete # %s?', $modulo['Modulo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modulos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modulo'), array('action' => 'add')); ?> </li>
		</ul>
	</div>
	<div class="span10">
		<h2><?php  echo __('Modulo');?></h2>
		<dl>
					<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($modulo['Modulo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($modulo['Modulo']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($modulo['Modulo']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cor'); ?></dt>
		<dd>
			<?php echo h($modulo['Modulo']['cor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Icone'); ?></dt>
		<dd>
			<?php echo h($modulo['Modulo']['icone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ordem'); ?></dt>
		<dd>
			<?php echo h($modulo['Modulo']['ordem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($modulo['Modulo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($modulo['Modulo']['modified']); ?>
			&nbsp;
		</dd>
		</dl>
	</div>
</div>
