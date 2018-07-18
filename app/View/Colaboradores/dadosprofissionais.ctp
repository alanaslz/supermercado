<div class="row">
	
	<div class="col-xs-12 col-md-4">
		<?php echo $this->Form->input('matricula', array('class' => 'form-control',  'placeholder' => __('Matricula')));?>

	</div>
	<div class="col-xs-12 col-md-4">
		<?php echo $this->Form->input('cargo', array('class' => 'form-control',  'placeholder' => __('Cargo')));?>
	</div>
	<div class="col-xs-12 col-md-4">
		<?php echo $this->Form->input('setor_id', array('class' => 'form-control select2', 'empty'=>'Selecione Setor', 'placeholder' => __('Setor Id')));?>
	</div>
</div>


<div class="row">
	<div class="col-xs-12 col-md-4">

<?php echo $this->Form->input('vinculo_id', array('class' => 'form-control','empty'=>'Selecione Vínculo', 'placeholder' => __('Vinculo Id')));?>		
	</div>
		
				
	<div class="col-xs-12 col-md-4">
		<?php echo $this->Form->input('funcao', array('type'=>'text','class' => 'form-control',  'placeholder' => __('Função')));?>
		
	</div>
	
	
	
	<div class="col-xs-12 col-md-2">
		<?php echo $this->Form->input('escolaridade_id', array('class' => 'form-control', 'empty'=>'Selecione Escolaridade', 'placeholder' => __('Escolaridade Id')));?>	
				
	</div>
	
	<div class="col-xs-12 col-md-2">
		<?php echo $this->Form->input('grupo_id', array('class' => 'form-control','empty'=>'Selecione Grupo', 'placeholder' => __('Grupo Id')));?>
				
	</div>
	
	
</div>



 <script>
	
	 $(".select2").select2();
	 
	</script>