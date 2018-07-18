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
		              
						
						<a class="btn btn-app"  data-toggle="tooltip" data-placement="bottom" title="Listar <?php echo $pluralHumanName;?>"  href="<?php echo "<?php echo \$this->Html->url(array('action' => 'index')); ?>"; ?>"> <i class='fa fa-list'></i> <?php echo $pluralHumanName;?> </a>
	                 
<!--
						<?php
								$done = array();
								foreach ($associations as $type => $data) {
									foreach ($data as $alias => $details) {
										if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) { ?>
										
											<a class="btn btn-app" href="<?php echo "<?php echo \$this->Html->url(array('controller' => '{$details['controller']}','action' => 'index')); ?>"; ?>"> 
												 <i class='fa fa-list'></i> <?php echo Inflector::humanize($details['controller']) ?> </a>
										 
											<a class="btn btn-app" href="<?php echo "<?php echo \$this->Html->url(array('controller' => '{$details['controller']}','action' => 'add')); ?>"; ?>"> 
											  <i class='fa fa-plus'></i> <?php echo Inflector::humanize(Inflector::underscore($alias)) ?> </a>
						
											<?
											
											$done[] = $details['controller'];
										}
									}
								}
						?>
-->
	                 </div>
		</div>
	</div>
</div>  

<div class="row">
	<div class="<?php echo $pluralVar;?>  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           <? echo "\t\t\t<?php echo \$this->Form->create('{$modelClass}', array('role' => 'form')); ?>\n\n"; ?>
<?php
/*
		foreach ($fields as $field) {
			if (strpos($action, 'add') !== false && $field == $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
				echo "\t\t\t\t<div class=\"form-group\">\n";
				echo "\t\t\t\t\t<?php echo \$this->Form->input('{$field}', array('class' => 'form-control', 'placeholder' => '".Inflector::humanize($field)."'));?>\n";
				echo "\t\t\t\t</div>\n";
			}
		}
*/
 

foreach ($fields as $field) {
                if (strpos($action, 'add') !== false && $field == $primaryKey) {
                    continue;
                } elseif (!in_array($field, array('created', 'modified', 'updated'))) {
	                
	             if ($schema[$field]["type"] == "boolean")  {
		             if ($field == 'status') { 
			             ?>
			            <div class="row">
							<div class="col-md-4">
			             <?php
				             
						 echo "\t\t\t\t\t<?php echo \$this->Form->input('{$field}', array('class'=>'form-control','options' => array(0=>'Inativo', 1=>'Ativo')));" . " ?>\n";
						 ?>
							</div>
			             </div>
						 <?php
		        	}
	            } else {
            
                    echo "\t\t\t\t<div class=\"form-group\">\n";
                    echo "\t\t\t\t\t<?php echo \$this->Form->input('{$field}', array(".(($schema[$field]["type"] == "bool" || $schema[$field]["type"] == "boolean")?"":"'class' => 'form-control', ")."'placeholder' => __('" . Inflector::humanize($field) . "')));?>\n";
                    echo "\t\t\t\t</div>\n";
                    }
                }
            }
            
            
            		
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t\t\t\t<div class=\"form-group\">\n";
				echo "\t\t\t\t\t<?php echo \$this->Form->input('{$assocName}', array('class' => 'form-control', 'placeholder' => '".Inflector::humanize($field)."'));?>\n";
				echo "\t\t\t\t</div>\n";
			}
		}
?>
<hr/>
<?php
				echo "\t\t\t\t<div class=\"form-group\">\n";
				echo "\t\t\t\t\t<?php echo \$this->Form->submit(__('Submeter'), array('class' => 'btn btn-primary','div'=>false)); ?>\n";
			 
			  if (strpos($action, 'add') === false) { 
                echo "<?php echo \$this->Form->postLink(__('Excluir'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')), 
			                 	array('class'=>'btn btn-danger pull-right'), __('Confirma exclusão do registro # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>";
}
 				
				echo "\t\t\t\t</div>\n\n";


 
				 
				
			echo "\t\t\t<?php echo \$this->Form->end() ?>\n\n";
			?>
	            
            </div>
		</div>
	</div>
</div>
