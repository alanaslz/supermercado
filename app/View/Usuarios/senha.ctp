<?php echo $this->Form->create('Usuario');?>

	<legend>Trocar Senha</legend>

       <?php  echo $this->Form->create('Usuario'); ?>
	<fieldset>
	
                <div class="alinHor5">Senha Atual:</div>
		<?php echo $this->Form->input('password',array('label'=>false));?>
                <div class="alinHor5">Nova Senha:</div>
		<?php echo $this->Form->input('newpassword',array('label'=>false,'type'=>'password'));?>
                 <hr>
                <div class="alinHor5"></div>
                   <button type="submit" class="btn btn-primary" style="width: 100px;"><i class="icon-check icon-white"></i> Salvar</button>
	</fieldset>

<?php echo $this->Form->end();?>