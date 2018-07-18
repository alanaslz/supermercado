<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<?php  $usuario = $this->Session->read('Auth.User'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Supermercado </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

		<?php echo $this->Html->css(array('../plugins/bootstrap/css/bootstrap.min',
	    							   '../plugins/daterangepicker/daterangepicker-bs3',
	    							   '../plugins/iCheck/all',
	    							   '../plugins/colorpicker/bootstrap-colorpicker.min',
	    							   '../plugins/timepicker/bootstrap-timepicker.min',
	    							   '../plugins/bootstrap/css/bootstrap-datepicker3',
	    							   '../plugins/select2/select2.min',
	    							   'AdminLTE',
	    							   'skins/skin-blue.min',
	    							   'custom'
	    							
	    							    ));?>
	    							    
	    							  
        <!-- Font Awesome    -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
         <!-- <link rel="stylesheet" href="css/AdminLTE.min.css">
        AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
   
        <link rel="stylesheet" href="css/skins/skin-blue.min.css"> -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <![endif]-->
    
        <link rel="apple-touch-icon" href="<?php echo $this->webroot.'img'.DS.'Icon@2x.png';?>" />
         <?php  print $this->Html->script(array(
	        '../plugins/jQuery/jQuery-2.1.4.min',
			'../plugins/bootstrap/js/bootstrap.min',
			'../plugins/bootstrap/js/bootstrap-datepicker',
			'../plugins/select2/select2.full.min',
			'../plugins/input-mask/jquery.inputmask',  
			'../plugins/input-mask/jquery.inputmask.date.extensions',
			'../plugins/input-mask/jquery.inputmask.extensions',
			'../plugins/daterangepicker/daterangepicker',
			'../plugins/colorpicker/bootstrap-colorpicker.min',
			'../plugins/timepicker/bootstrap-timepicker.min',
			'../plugins/slimScroll/jquery.slimscroll.min',
			'../plugins/iCheck/icheck.min',
			'../plugins/fastclick/fastclick.min',
			'app.min',
			'demo.js'));
		print $scripts_for_layout; ?> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    </head> 
		<!--
		BODY TAG OPTIONS:
		=================
		Apply one or more of the following classes to get the
		desired effect
		|---------------------------------------------------------|
		| SKINS         | skin-blue                               |
		|               | skin-black                              |
		|               | skin-purple                             |
		|               | skin-yellow                             |
		|               | skin-red                                |
		|               | skin-green                              |
		|---------------------------------------------------------|
		|LAYOUT OPTIONS | fixed                                   |
		|               | layout-boxed                            |
		|               | layout-top-nav                          |
		|               | sidebar-collapse                        |
		|               | sidebar-mini                            |
		|---------------------------------------------------------|
		-->
    <body class="skin-blue sidebar-mini">
	    
	    
	    <? $modulos = $this->Session->read('modulos'); ?>
	    <? $operacoes = $this->Session->read('operacoes'); ?>
	    
	    
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">
                <!-- Logo -->
                <a href="<?php echo  $this->Html->url(array('controller' => 'home', 'action' => 'index')); ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b><i class="fa fa-shopping-basket"></i> </b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Supermercado</b></span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <!-- Menu toggle button -->
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the messages -->
                                        <ul class="menu">
                                            <li>
                                                <!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <!-- User Image -->
<!--
                                                        <img src="<?php echo $this->webroot.'img'.DS.'user2-160x160.jpg';?>" class="img-circle" alt="User Image">
                                                        
-->
                                                        	
                                                    </div>
                                                    <!-- Message title and timestamp -->
                                               
                                                    <!-- The message -->
                                                   
                                                </a>
                                            </li>
                                            <!-- end message -->
                                        </ul>
                                        <!-- /.menu -->
                                    </li>
                                    <li class="footer">
                                     
                                    </li>
                                </ul>
                            </li>
                            <!-- /.messages-menu -->
                            <!-- Notifications Menu -->
                            <li class="dropdown notifications-menu">
                                <!-- Menu toggle button -->
                                
                            </li>
                            <!-- Tasks Menu -->
                            <li class="dropdown tasks-menu">
                                <!-- Menu Toggle Button -->
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <!-- Inner menu: contains the tasks -->
                                        <ul class="menu">
                                            <li>
                                                <!-- Task item -->
                                                <a href="#">
                                                    <!-- Task title and progress text -->
                                                    <h3>
                            Design some buttons<small class="pull-right">20%</small></h3>
                                                    <!-- The progress bar -->
                                                    <div class="progress xs">
                                                        <!-- Change the css width attribute to simulate progress -->
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs"><?php echo $usuario['name']; ?></span>
                                    
                                    
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header"> <p> <?php echo $usuario['name']; ?></p>
                                    </li>
                                    <!-- Menu Body -->
<!--
                                    <li class="user-body">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </li>
-->
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo $this->Html->url(array('controller'=>'usuarios','action' => 'senha', 'admin'=>false)); ?>" class="btn btn-default btn-flat">Trocar Senha</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo $this->Html->url(array('controller'=>'usuarios','action' => 'logout')); ?>" class="btn btn-default btn-flat">Sair</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header">MENU PRINCIPAL</li>
                        
                        <?php  echo '<li class="treeview">'. $this->Html->link('<i class="fa fa-home"></i>Página Inicial', array('controller' => 'home', 'admin'=>false, 'action' => 'index'), array('escape' => false)) .'</li>'; ?>
                        
                        
 
                         <?php foreach($modulos as $modulo ): ?>
                         <li class="treeview">
                            <a href="#"><i class="fa <? echo $modulo['Modulo']['icone'];?>"></i> <span><? echo $modulo['Modulo']['name'];?></span><i class="fa fa-angle-left pull-right"></i></a>
                            <?php $i=0; ?>
                            <ul class="treeview-menu">
	                            <?php foreach($operacoes as $operacao ): ?>
	                            
	                            <?php 
				                               if($modulo['ModuloUsuario']['modulo_id'] == $operacoes[$i]['ModuloOperacao']['modulo_id'])
				                               {
				                                     echo '<li>'. $this->Html->link(__($operacoes[$i]['ModuloOperacao']['name']), 
				                                             array('admin'=>false,'controller' => $operacoes[$i]['ModuloOperacao']['modelo'], 'action' => 
				                                             $operacoes[$i]['ModuloOperacao']['action'])) .'</li>';
				                                
				                               } ?>
	                   
											 <?php $i++; ?>

	                            
	                            
	                            
	                            <?php endforeach; ?> 
                            </ul>
                         </li>    
                         
                          <?php endforeach; ?> 
 
                        
                        
                   <?php  echo '<li class="treeview">'. $this->Html->link('<i class="fa fa-home"></i>Manual', array('controller' => 'home', 'admin'=>false, 'action' => 'index'), array('escape' => false)) .'</li>'; ?> 
                                           </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
<!--
                <section class="content-header">
                   
 
                </section>
-->
                <!-- Main content -->
                <section class="content">
	                
	                <div class="row">
		                <div class="col-md-12">
	                        <?php print $this->FrontEnd->message();?>
		                </div>
	                </div>
	                <?php echo $this->fetch('content'); ?>
	                
	                   	<?php  //echo $this->element('sql_dump'); ?>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
<!--                    Versão <?php echo Configure::version(); ?> --> Desenvolvido por Alana Oliveira
</div>
                <!-- Default to the left -->
                 Trabalho apresentado à disciplina Engenharia e Desenvolvimento de Sistemas / PPGEE 
            </footer>
                       <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <!-- REQUIRED JS SCRIPTS -->
        <!-- jQuery 2.1.4 -->
        <!-- Bootstrap 3.3.5 -->
        <!-- AdminLTE App -->
               <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
         
         <?php 
   // phpinfo(); 
?>

<script>
      $(function () {
	  	$(".select2").select2();
	   });
	</script>
	
	
    </body>
</html>
