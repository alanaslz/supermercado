


<!--
<div class="row">
	<div class="col-xs-12 col-md-8">
		
	</div>
	<div class="col-xs-12 col-md-4">
	</div>
</div>
-->


<div class="row">
	<div class="col-xs-12 col-md-8">
		<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => __('Name'), 'label'=>'Nome Completo',));?>
	</div>
	<div class="col-xs-12 col-md-4">
		<?php echo $this->Form->input('status', array('class'=>'form-control','default'=>'1', 'options' => array(0=>'Inativo', 1=>'Ativo'))); ?>
		
	</div>
</div>

<div class="row">
	 
	<div class="col-xs-12 col-md-4">
		
		<?php
			
			 if($this->data!=null) {
				 $dtnascimento = $this->Time->format($this->data['Colaborador']['dt_nascimento'], '%d/%m/%Y');
				 
			 }  else {
				 
				 $dtnascimento = null;
			 }
			
		?>
		
		<?php echo $this->Form->input('dt_nascimento', array('class' => 'form-control', 
			"value"=>$dtnascimento,
			"type"=>"text",'placeholder' => __('dd/mm/aaaa'), 'label'=>'Data de Nascimento', 'escape' => false));?>
		      
			
	</div>
	
	 
        
	
			  
           
                    
                    
	<div class="col-xs-12 col-md-4">
		<?php echo $this->Form->input('cpf', array('class' => 'form-control', 'label'=>'CPF','placeholder' => __('CPF')));?>
	</div>
	<div class="col-xs-12 col-md-4">
		<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => __('Email')));?>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-md-4">
			<?php echo $this->Form->input('rg', array('class' => 'form-control', 'placeholder' => __('Rg')));?>
	</div>
	<div class="col-xs-12 col-md-4">
		<?php echo $this->Form->input('orgaoemissor', array('class' => 'form-control', 'label'=>'Orgão Emissor', 'placeholder' => __('Orgão Emissor')));?>
	</div>
</div>


 
    <script>
      $(function () {
	    
	    $("#ColaboradorDtNascimento").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/aaaa"});
	        
	   });
	</script>	
 


 