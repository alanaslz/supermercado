<? $modulos = $this->Session->read('modulos'); ?>
<? $operacoes = $this->Session->read('operacoes'); ?>
	    
	  
	 
	    
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
	    
	    
	    <?php foreach($modulos as $modulo ): ?>
	    
	    
	      <div class="col-lg-4  col-md-6  col-xs-12">
            <!-- small box -->
            <div class="small-box <? echo $modulo['Modulo']['cor'];?>">
                <div class="inner">
                    <h3><? echo $modulo['Modulo']['name'];?></h3>
                    <p><? echo $modulo['Modulo']['descricao'];?></p>
                </div>
                <div class="icon">
                    <i class="fa <? echo $modulo['Modulo']['icone'];?>"></i>
                </div>
               
 			                    
				                    
			                   
              <div class="box box-solid collapsed-box">
	          <div class="box-header with-border">
    <h3 class="box-title" data-widget="collapse" style="cursor: pointer;"  >Acessar</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
              
               
               
               <div class="box-body">
	                 <?php $i=0; ?>
	                 
                  <ul>
	                   <?php foreach($operacoes as $operacao ): ?>
	                   <?php 
				                               if($modulo['ModuloUsuario']['modulo_id'] == $operacoes[$i]['ModuloOperacao']['modulo_id'])
				                               {
				                                     echo '<li>'. $this->Html->link(__($operacoes[$i]['ModuloOperacao']['name']), 
				                                             array('controller' => $operacoes[$i]['ModuloOperacao']['modelo'], 'action' => 
				                                             $operacoes[$i]['ModuloOperacao']['action'])) .'</li>';
				                                
				                               } ?>
	                   
	                     <?php $i++; ?>
				       <?php endforeach; ?>
				                        
				                        
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            

                
            </div>
        </div>
        <!-- ./col -->
        
         <?php endforeach; ?>   
	</div>
     </fieldset>
</div>
 

	 
	 
	 
