<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Supermercado | Login</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        
  
        
        
        
        <?php echo $this->Html->css(array('../plugins/bootstrap/css/bootstrap.min',
	    					 			'AdminLTE',
	    							    'skins/skin-blue.min'
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
    
    
    
    
  
    </head>
  
    <body class="login-page">
	    <!-- Main content -->
	    
	    

                <section class="content">
	                <?php echo $this->fetch('content'); ?>
	                 <div class="row">
		                <div class="col-md-4 col-md-offset-4">
	                        <?php print $this->FrontEnd->message();?>
		                </div>
	                </div>

                </section>
                <!-- /.content -->    
                
         
	    
<!--
	      <?php  print $this->Html->script(array(
	        '/plugins/jQuery/jQuery-2.1.4.min',
			'/plugins/bootstrap/js/bootstrap.min',
						'app.min'));
		  ?> 
-->
		
 
    
    
        </body>
</html>
