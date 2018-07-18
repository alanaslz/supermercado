<div class="moduloOperacoes index">
	<h2><?php echo __('Modulo Operacoes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('modulo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('modelo'); ?></th>
			<th><?php echo $this->Paginator->sort('action'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('ordem'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($moduloOperacoes as $moduloOperacao): ?>
	<tr>
		<td><?php echo h($moduloOperacao['ModuloOperacao']['id']); ?>&nbsp;</td>
		<td><?php echo h($moduloOperacao['ModuloOperacao']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($moduloOperacao['Modulo']['name'], array('controller' => 'modulos', 'action' => 'view', $moduloOperacao['Modulo']['id'])); ?>
		</td>
		<td><?php echo h($moduloOperacao['ModuloOperacao']['modelo']); ?>&nbsp;</td>
		<td><?php echo h($moduloOperacao['ModuloOperacao']['action']); ?>&nbsp;</td>
		<td><?php echo h($moduloOperacao['ModuloOperacao']['created']); ?>&nbsp;</td>
		<td><?php echo h($moduloOperacao['ModuloOperacao']['modified']); ?>&nbsp;</td>
		<td><?php echo h($moduloOperacao['ModuloOperacao']['ordem']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $moduloOperacao['ModuloOperacao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $moduloOperacao['ModuloOperacao']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $moduloOperacao['ModuloOperacao']['id']), null, __('Are you sure you want to delete # %s?', $moduloOperacao['ModuloOperacao']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Modulo Operacao'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Modulos'), array('controller' => 'modulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modulo'), array('controller' => 'modulos', 'action' => 'add')); ?> </li>
	</ul>
</div>
