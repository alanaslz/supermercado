<div class="well well-white"  style="margin-top:-10px;">
	 <div class="form-horizontal view">
		<table>
			<tr><td class="dlabel">Usuário Autenticado: &nbsp;</td><td class="data"> <?php echo $usuario['Usuario']['name']; ?></td> </tr>
		</table>
	 </div>
</div>

<div class="row-fluid">

 <fieldset>

   <div class="row-fluid">
 	 <!-- Small boxes (Stat box) -->
    <div class="row">
	      <div class="col-lg-4  col-md-6  col-xs-12">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>Viagens</h3>
                    <p>Módulo de Gerenciamento de Viagens</p>
                </div>
                <div class="icon">
                    <i class="fa fa-suitcase"></i>
                </div>
                <a href="<?php echo  $this->Html->url(array('controller' => 'viagens', 'action' => 'index')); ?>" class="small-box-footer">Acessar&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        
        <div class="col-lg-4  col-md-6  col-xs-12">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>Diárias</h3>
                    <p>Módulo de Solicitação de Diárias</p>
                </div>
                <div class="icon">
                    <i class="fa fa-dollar"></i>
                </div>
                <a href="<?php echo  $this->Html->url(array('controller' => 'diarias', 'action' => 'index')); ?>" class="small-box-footer">Acessar&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4  col-md-6  col-xs-12">
            <!-- small box -->
            <div class="small-box bg-teal">
                <div class="inner">
                    <h3>Passagens</h3>
                    <p>Módulo de Solicitação de Passagens</p>
                </div>
                <div class="icon">
                    <i class="fa fa-plane"></i>
                </div>
                <a href="<?php echo  $this->Html->url(array('controller' => 'passagens', 'action' => 'index')); ?>" class="small-box-footer">Acessar&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        
        
         <div class="col-lg-4  col-md-6  col-xs-12">
            <!-- small box -->
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3>Usuários</h3>
                    <p>Módulo de Gerenciamento de Usuários</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="<?php echo  $this->Html->url(array('controller' => 'usuarios', 'action' => 'index', 'admin'=>true)); ?>" class="small-box-footer">Acessar&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        
        
<!--
		    <div class="col-lg-4 col-xs-12">
	        <!-- small box -->
	<!--
	        <div class="small-box bg-yellow">
	            <div class="inner">
	                <h3>Capacitação</h3>
	                <p>Módulo de Capacitação</p>
	            </div>
	            <div class="icon">
	                <i class="fa fa-mortar-board"></i>
	            </div>
	            <a href="#" class="small-box-footer">Acessar &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
	        </div>
	    </div>
	
-->

        <!-- ./col -->
        <div class="col-lg-4  col-md-6  col-xs-12">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>Relatórios</h3>
                    <p>Emissão de Relatórios</p>
                </div>
                <div class="icon">
                    <i class="fa fa-list"></i>
                </div>
                <a href="<?php echo  $this->Html->url(array('controller' => 'relatorios', 'action' => 'index')); ?>" class="small-box-footer">Acessar  <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- /.row (main row) -->
   
	</div>
     </fieldset>
</div>
 

	 
	 
	 
