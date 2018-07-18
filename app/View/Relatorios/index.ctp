<div class="row">
	      <div class="col-lg-12  col-md-12  col-xs-12">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner" style="text-align: center">
					<h3>Relatórios</h3>
                    <p>Módulo de Emissão de Relatórios</p>	                
                </div>
                <div class="icon">
                    <i class="fa fa-list"></i>
                </div>
                <div class="small-box-footer"></div>
            </div>
        </div>
</div>

<div class="relatorios index row">
<div class="actions col-md-12">
	<div class="box box-solid">
                <div class="box-header with-border">
	                <h3 class="box-title"><?php echo __('Ações Permitidas'); ?></h3>
	                <div class="box-tools">
                    	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  	</div>
                </div>
                
                 <div class="box-body no-padding">
                 
                  
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Ir para Página Inicial" href="<?php echo $this->Html->url(array('controller'=>'home','action' => 'index')); ?>"> <i class='fa fa-home'></i> Página Inicial </a>
                 
<!--
                 
                 <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Relatório de Viagens" href="<?php echo $this->Html->url(array('controller'=>'relatorios','action'=>'viagens'));?>"><i class="fa fa-list"></i> Viagens </a>
                    <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Relatorio de Passagens" href="<?php echo $this->Html->url(array('controller'=>'relatorios','action'=>'passagens'));?>"><i class="fa fa-plane"></i> Passagens</a>
                    <a class="btn btn-app" data-toggle="tooltip" data-placement="bottom" title="Relatorio de Diárias" href="<?php echo $this->Html->url(array('controller'=>'relatorios','action'=>'diarias'));?>"><i class="fa fa-dollar"></i> Diárias</a>
-->
                   





    
    </div><!-- /.box-body -->
    
	</div>
	
	<div class="row">
	<div class="col-md-12">
	<div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title"> Lista de Relatórios Disponíveis</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body">
               
               <ul class="mailbox-attachments clearfix">
                    <li>
                      <a href="<?php echo $this->Html->url(array('controller'=>'relatorios','action'=>'viagens'));?>"> <span class="mailbox-attachment-icon"><i class="fa fa-suitcase"></i></span></a>
                      <div class="mailbox-attachment-info">
                        <a href="<?php echo $this->Html->url(array('controller'=>'relatorios','action'=>'viagens'));?>" class="mailbox-attachment-name">Viagens</a>
                        <span class="mailbox-attachment-size">
                          Relatório Geral de Viagens
<!--
                          <hr/>
                          <a href="<?php echo $this->Html->url(array('controller'=>'relatorios','action'=>'viagens'));?>" class="btn btn-block btn-success">Acessar</a>
                          
-->
                        </span>
                      </div>
                    </li>
                    <li>
                      <a href="<?php echo $this->Html->url(array('controller'=>'relatorios','action'=>'passagens'));?>"> <span class="mailbox-attachment-icon"><i class="fa fa-plane"></i></span></a>
                      <div class="mailbox-attachment-info">
                        <a href="<?php echo $this->Html->url(array('controller'=>'relatorios','action'=>'passagens'));?>" class="mailbox-attachment-name">Passagens</a>
                        <span class="mailbox-attachment-size">
                          Relatório Geral de Passagens
<!--
                          <hr/>
                          <a href="<?php echo $this->Html->url(array('controller'=>'relatorios','action'=>'viagens'));?>" class="btn btn-block btn-success">Acessar</a>
                          
-->
                        </span>
                      </div>
                    </li>
                    <li>
                      <a href="<?php echo $this->Html->url(array('controller'=>'relatorios','action'=>'diarias'));?>"> <span class="mailbox-attachment-icon"><i class="fa fa-dollar"></i></span></a>
                      <div class="mailbox-attachment-info">
                        <a href="<?php echo $this->Html->url(array('controller'=>'relatorios','action'=>'diarias'));?>" class="mailbox-attachment-name">Diárias</a>
                        <span class="mailbox-attachment-size">
                          Relatório Geral de Diárias
<!--
                          <hr/>
                          <a href="<?php echo $this->Html->url(array('controller'=>'relatorios','action'=>'viagens'));?>" class="btn btn-block btn-success">Acessar</a>
                          
-->
                        </span>
                      </div>
                    </li>
                    
               </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
</div>
<!--
<div class="col-md-4">
	<div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title"> Relatórios de Acompanhamento</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><i class="fa fa-list"></i> Solicitações pendentes </a></li>
                    <li><a href="#"><i class="fa fa-plane"></i> </a></li>
                    <li><a href="#"><i class="fa fa-dollar"></i></a></li>
                   
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
<!-- </div> -->
 
              
</div>


</div>


 
