
        <div class="login-box">
            <div class="login-logo">
 
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
              
                
                <?php echo $this->Form->create('Usuario',array('action'=>'login', 'accept-charset'=>'utf-8', 'class'=>"form-signin")); ?>
<!-- 				<h3 class="form-signin-heading">Sup. de Epidemiologia</h3> -->
				
				  <p class="login-box-msg">Autenticação</p><hr/>
				<div class="form-group has-feedback">
					<?php echo $this->Form->input('username',array('label'=>'Usuário:','placeholder'=>'Usuário','class'=>'form-control')); ?>
<!-- 					<span class="glyphicon glyphicon-user form-control-feedback"></span> -->
				</div>
				<div class="form-group has-feedback">
					<?php echo $this->Form->input('password',array('label'=>'Senha:','placeholder'=>'Senha','class'=>'form-control')); ?>
<!-- 					<span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
				</div>
				<button class="btn btn-primary btn-block btn-flat" type="submit" onclick="location.href='index'"><i class="icon-check icon-white"></i> Entrar</button>
				<?php echo $this->Form->end();?>

 <br />
                 
                 <a href="<?php echo  $this->Html->url(array('controller' => 'usuarios', 'action' => 'recuperar')); ?>" class="logo"> Esqueci minha senha</a>
	                 
                <br>
                
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
        <!-- jQuery 2.1.4 -->
        <script src="../../plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  
