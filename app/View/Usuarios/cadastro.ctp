<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
 <legend><?php echo __('Atualizar Cadastro'); ?></legend>
    <div class="well2">
	<div class="btn-group">

		<a class='btn' href='<?php echo $this->Html->url(array('controller'=>'pesquisador','action' => 'index')); ?>'><i class='icon-list'></i> Área Pessoal </a>
	</div>
</div>
    
	<fieldset>
	
		<?php echo $this->Form->input('id'); ?>
                <div class="alinHor7">Nome:</div>
		<?php echo $this->Form->input('name',array('label'=>false,'style'=>array('width:350px;')));?>
                <div class="alinHor7">CPF:</div>
		<?php echo $this->Form->input('username',array('label'=>false,'readonly' => 'readonly'));?>        
                <div class="alinHor7">e-mail:</div>
		<?php echo $this->Form->input('email',array('label'=>false));?>
           
             <div class="alinHor7">Departamento:</div>
		<?php echo $this->Form->input('sigladepto',array('label'=>false));?>
		
		  <div class="alinHor7">Programa:</div>
		<?php echo $this->Form->input('siglaprograma',array('label'=>false));?>
		
		  <div class="alinHor7">Link Lattes:</div>
		<?php echo $this->Form->input('lattes',array('label'=>false,'style'=>array('width:350px;')));?>
		
           
           
           
           
           
           
           
	 
                 <hr>
                <div class="alinHor4"></div>
                   <button type="submit" class="btn btn-primary" style="width: 100px;"><i class="icon-check icon-white"></i> Salvar</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>

