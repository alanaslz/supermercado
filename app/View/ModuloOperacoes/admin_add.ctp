<div class="moduloOperacoes form">
<?php echo $this->Form->create('ModuloOperacao'); ?>
	<fieldset>
		<legend><?php echo __('Add Modulo Operacao'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('modulo_id');
		echo $this->Form->input('modelo');
		echo $this->Form->input('action');
		echo $this->Form->input('ordem');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Modulo Operacoes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Modulos'), array('controller' => 'modulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modulo'), array('controller' => 'modulos', 'action' => 'add')); ?> </li>
	</ul>
</div>
