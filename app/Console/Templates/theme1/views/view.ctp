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
	             
 
 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Editar <?php echo $singularHumanName;?>" href="<?php echo "<?php echo \$this->Html->url(array('action' => 'edit',\${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>"; ?>"> <i class='fa fa-pencil'></i> <?php echo $singularHumanName;?> </a>
 
 <a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar <?php echo $pluralHumanName;?>"  href="<?php echo "<?php echo \$this->Html->url(array('action' => 'index')); ?>"; ?>"> <i class='fa fa-list'></i> <?php echo $pluralHumanName;?> </a>
	                 
<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar <?php echo $singularHumanName;?>" href="<?php echo "<?php echo \$this->Html->url(array('action' => 'add')); ?>"; ?>"> <i class='fa fa-plus'></i> <?php echo $singularHumanName;?> </a>
 	                 


<?
			$done = array();
			foreach ($associations as $type => $data) {
				foreach ($data as $alias => $details) {
					if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
						
						?>
						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar <?php echo Inflector::humanize($details['controller'])  ;?>"  href="<?php echo "<?php echo \$this->Html->url(array('controller' => '{$details['controller']}', 'action' => 'index')); ?>"; ?>"> <i class='fa fa-list'></i> <?php echo Inflector::humanize($details['controller']); ?> </a>
						
						
						<a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Adicionar <?php echo Inflector::humanize(Inflector::underscore($alias));?>" href="<?php echo "<?php echo \$this->Html->url(array('controller' => '{$details['controller']}','action' => 'add')); ?>"; ?>"> <i class='fa fa-plus'></i> <?php echo Inflector::humanize(Inflector::underscore($alias));?> </a>
						
						
						<?

					 
					}
				}
			}
			?>
		</ul>
	
	
	   
    </div><!-- /.box-body -->
    
	</div>
</div>

<div class="row">
	<div class="<?php echo $pluralVar;?>  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php printf("<?php echo __('%s %s'); ?>", 'Detalhes - ', $singularHumanName); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	            
		<h3><?php echo "<?php  echo __('{$singularHumanName}');?>"; ?></h3>
		 
			
			<table class="table table-bordered">
				
			<?php
			foreach ($fields as $field) {
				$isKey = false;
				if (!empty($associations['belongsTo'])) {
					foreach ($associations['belongsTo'] as $alias => $details) {
						if ($field === $details['foreignKey']) {
							$isKey = true;
							echo "\t\t<tr><th><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></th>\n";
							echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t&nbsp;\n\t\t</td></tr>\n";
							break;
						}
					}
				}
				if ($isKey !== true) {
					echo "\t\t<tr><th><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
					echo "\t\t<td>\n\t\t\t<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t\t&nbsp;\n\t\t</td></tr>\n";
				}
			}
			?>
		</table>
	</div>
</div>
<?php
if (!empty($associations['hasOne'])) :
	foreach ($associations['hasOne'] as $alias => $details):
		?>
		
<!--
<div class="row">
	<div class="<?php echo $pluralVar;?>  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title">
	            	<?php echo "<?php echo __('" . Inflector::humanize($details['controller']) . " Relacionados');?>"; ?>
	            	
            	</h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	            
            </div>
		</div>
	</div>
</div>
-->
	            
	            
		<div class="related container">
		 
				<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])):?>\n"; ?>
			<dl>
				<?php
				foreach ($details['fields'] as $field) {
					echo "\t\t<dt><?php echo __('" . Inflector::humanize($field) . "');?></dt>\n";
					echo "\t\t<dd>\n\t<?php echo \${$singularVar}['{$alias}']['{$field}'];?>\n&nbsp;</dd>\n";
				}
				?>
			</dl>
		<?php echo "<?php endif; ?>\n"; ?>
			<div class="actions">
				<ul>
					<li><?php echo "<?php echo \$this->Html->link(__('Edit " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?></li>\n"; ?>
				</ul>
			</div>
		</div>
		<?php
	endforeach;
endif;
if (empty($associations['hasMany'])) {
	$associations['hasMany'] = array();
}
if (empty($associations['hasAndBelongsToMany'])) {
	$associations['hasAndBelongsToMany'] = array();
}
$relations = array_merge($associations['hasMany'], $associations['hasAndBelongsToMany']);
$i = 0;
foreach ($relations as $alias => $details):
	$otherSingularVar = Inflector::variable($alias);
	$otherPluralHumanName = Inflector::humanize($details['controller']);
	?>
	<div class="row">
		<div class="related col-md-10 offset1">
			<hr>
			<h3><?php echo "<?php echo __('" . $otherPluralHumanName . " Relacionados ');?>"; ?></h3>
			<div class="btn-toolbar">
			<?php echo "<?php echo \$this->Html->link(__('Adicionar " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'), array('class'=>'btn btn-mini'));?>"; ?>
			</div>
	<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])):?>\n"; ?>
			<table class="table table-bordered">
				<tr>
					<?php
					foreach ($details['fields'] as $field) {
						echo "\t\t<th><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
					}
					?>
					<th class="actions"><?php echo "<?php echo __('Actions');?>"; ?></th>
				</tr>
				<?php
				echo "\t<?php
		\$i = 0;
		foreach (\${$singularVar}['{$alias}'] as \${$otherSingularVar}): ?>\n";
				echo "\t\t<tr>\n";
				foreach ($details['fields'] as $field) {
					echo "\t\t\t<td><?php echo \${$otherSingularVar}['{$field}'];?></td>\n";
				}

				echo "\t\t\t<td class=\"actions\">\n";
				echo "\t\t\t<div class=\"btn-toolbar\">\n";
				echo "\t\t\t\t<div class=\"btn-group\">\n";
				echo "\t\t\t\t<?php echo \$this->Html->link(__('View'), array('controller' => '{$details['controller']}', 'action' => 'view', \${$otherSingularVar}['{$details['primaryKey']}']), array('class' => 'btn btn-mini')); ?>\n";
				echo "\t\t\t\t<?php echo \$this->Html->link(__('Edit'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$otherSingularVar}['{$details['primaryKey']}']), array('class' => 'btn btn-mini')); ?>\n";
				echo "\t\t\t\t</div>\n";
				echo "\t\t\t\t<div class=\"btn-group\">\n";
				echo "\t\t\t\t<?php echo \$this->Html->link(__('Delete'), array('controller' => '{$details['controller']}', 'action' => 'delete', \${$otherSingularVar}['{$details['primaryKey']}']), array('class' => 'btn btn-danger btn-mini'), __('Are you sure you want to delete # %s?', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
				echo "\t\t\t\t</div>\n";
				echo "\t\t\t</div>\n";
				echo "\t\t\t</td>\n";
				echo "\t\t</tr>\n";

				echo "\t<?php endforeach; ?>\n";
				?>
			</table>
	<?php echo "<?php endif; ?>\n\n"; ?>
		</div>
	</div>
<?php endforeach; ?>

