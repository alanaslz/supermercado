<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="<?php echo $pluralVar;?> index row">
<div class="actions col-md-10 col-md-offset-1">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo "<?php echo __('Ações Permitidas'); ?>"; ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
                 
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar <?php echo $singularHumanName;?>" href="<?php echo "<?php echo \$this->Html->url(array('action' => 'add')); ?>"; ?>"> <i class='fa fa-plus'></i> <?php echo $singularHumanName;?> </a>
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Ir para Página Inicial" href="<?php echo "<?php echo \$this->Html->url(array('controller'=>'home','action' => 'index')); ?>"; ?>"> <i class='fa fa-home'></i> <?php echo 'Página Inicial';?> </a>
<!--
                  <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Página Anterior" href="javascript:history.back()"> <i class='fa fa-arrow-circle-left'></i> <?php echo 'Voltar';?> </a>
               
-->
 
            
<!--
        
<?php
	$done = array(); 
	foreach ($associations as $type => $data) {
		foreach ($data as $alias => $details) {
			if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
				 ?>
				 <a class="btn btn-app" href="<?php echo "<?php echo \$this->Html->url(array('controller' => '{$details['controller']}','action' => 'index')); ?>"; ?>"> <i class='fa fa-list'></i> <?php echo Inflector::humanize($details['controller']) ?> </a>
				 
				  <a class="btn btn-app" href="<?php echo "<?php echo \$this->Html->url(array('controller' => '{$details['controller']}','action' => 'add')); ?>"; ?>"> <i class='fa fa-plus'></i> <?php echo Inflector::humanize(Inflector::underscore($alias)) ?> </a>
				 
				 	
				 	
				 <?
				
				 	
				  $done[] = $details['controller'];
			}
		}
	}
?>
-->
    
    </div><!-- /.box-body -->
    
	</div>
</div>
 
	<div class="col-md-10  col-md-offset-1">
	<div class="box box-primary">
                <div class="box-header with-border">
	     
	                 <h3 class="box-title"><?php echo "<?php echo __('{$pluralHumanName}');?>";?></h3>
                </div>
                <div class="box-body">
	                
 
	<table class="table table-bordered">
	<tbody>
	<tr>
	<?php  foreach ($fields as $field):?>
	
	<? if (($field !== 'created') && ($field !== 'modified')) { 
		$campo = '';
 
	?>
	
	  <? if ($field == 'name') {$campo = 'Nome';}  ?>
	
		<th><?php echo "<?php echo \$this->Paginator->sort('{$field}','{$campo}');?>";?></th>
    <? } ?>
	<?php endforeach;?>
		<th class="actions"><?php echo "<?php echo __('Ações');?>";?></th>
	</tr>
	<?php
	echo "<?php
	foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
	echo "\t<tr>\n";
		foreach ($fields as $field) {
			if (($field !== 'created') && ($field !== 'modified')) {  
		 
				
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						
// 						echo debug($details);
						echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
				
			}
			}
		}

        echo "\t\t<td class=\"actions\">\n";
        echo "\t\t\t<div class=\"btn-toolbar\">\n";
      
		echo "\t\t\t\t\t<?php echo \$this->Html->link(__('Visualizar'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn btn-default btn-xs')); ?>\n";
	 	echo "\t\t\t\t\t<?php echo \$this->Html->link(__('Editar'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn btn-default btn-xs')); ?>\n";
	 	echo "\t\t\t\t\t<?php echo \$this->Form->postLink(__('Excluir'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn btn-default btn-xs'), __('Confirma Exclusão do Registro # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
      
        echo "\t\t\t</div>\n";
		echo "\t\t</td>\n";
	echo "\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
	</table>
<!--
    <div class="well">
	<?php echo "<?php
	echo \$this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>";?>
	</div>
-->

	<div class="paging btn-group">
	<?php
		echo "<?php\n";
		echo "\t\techo \$this->Paginator->prev('< ' . __('Anterior'), array('class' => 'prev btn'), null, array('class' => 'prev disabled btn'));\n";
		echo "\t\techo \$this->Paginator->numbers(array('separator' => '', 'class' => 'btn', 'currentClass' => 'active'));\n";
		echo "\t\techo \$this->Paginator->next(__('Próxima') . ' >', array('class' => 'next btn'), null, array('class' => 'next disabled btn'));\n";
		echo "\t?>\n";
	?>
	</div>
</div>
</div>

