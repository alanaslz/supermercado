
<div class="usuarios form">
    <legend><?php echo __('Cadastro de Usuário'); ?></legend>
    <div class="well2">
            <a class='btn' href='<?php echo $this->Html->url(array('action' => 'index')); ?>'><i class='icon-list'></i> Lista de Usuários</a>

</div>
    
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		
                <div class="alinHor4">Nome:</div>
		<?php echo $this->Form->input('name',array('label'=>false,'style'=>array('width:350px;')));?>
                <div class="alinHor4">Username:</div>
		<?php echo $this->Form->input('username',array('label'=>false));?>
                <div class="alinHor4">Senha:</div>
		<?php echo $this->Form->input('password',array('label'=>false));?>
                <div class="alinHor4">Perfil:</div>
		<?php echo $this->Form->input('role_id',array('label'=>false));?>
                <div class="alinHor4">e-mail:</div>
		<?php echo $this->Form->input('email',array('label'=>false));?>
                <div class="alinHor5"></div>
		<?php echo $this->Form->input('status');?>
                <hr>
                <div class="alinHor4"></div>
                   <button type="submit" class="btn btn-primary" style="width: 100px;"><i class="icon-check icon-white"></i> Salvar</button>
	
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>

<script>
      $(function () {
	  	$(".select2").select2();
	   });
	</script>	
