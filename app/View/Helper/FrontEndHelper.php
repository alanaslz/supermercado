<?php

App::uses('AppHelper', 'View/Helper');

class FrontEndHelper extends AppHelper {

	/*----------------------------------------
	 * Atributtes
	 ----------------------------------------*/
	
	public $helpers = array( 'Html', 'Session', 'Time', 'Number' );

	private $months = array( 1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril', 5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro' );

	private $iconClasses = array(
		'index' => 'icon-th-list',
		'add' => 'icon-plus',
	);

	/*----------------------------------------
	 * Constructor
	 ----------------------------------------*/

	function __construct(View $View, $settings = array()){
		parent::__construct($View,$settings);
	}

	/*----------------------------------------
	 * Methods
	 ----------------------------------------*/

	public function label( $key, &$labelList ){

		$label = null;

		if( $key == 'O' )
			$label = 'label-warning';

		elseif( $key == 'C' )
			$label = 'label-success';

		return "<span class=\"label {$label}\">{$labelList[$key]}</span>";
	}

	public function cash( $value ){

		return $this->Number->format( $value, array( 'escape' => false, 'before' => 'R$ <span>', 'after' => '</span>', 'decimals' => ',', 'thousands' => '.' ) );
	}

	public function message(){
	
		
		$flash = $this->Session->check( "Message.flash" ) ? $this->Session->read( "Message.flash" ) : $this->Session->read( "Message.auth" );

		if( $flash ){

			$class = empty( $flash[ 'params' ][ 'class' ] ) ? 'alert-info' : 'alert-'.$flash[ 'params' ][ 'class' ];
			$button = empty( $flash[ 'params' ][ 'button' ] ) ? null : $this->Html->link( $flash[ 'params' ][ 'button' ][ 'label' ], $flash[ 'params' ][ 'button' ][ 'url' ], array( 'class' => 'btn btn-mini' ) );
			$message = $this->Session->check( "Message.flash" ) ? $this->Session->flash() : $this->Session->flash('auth');

			// return '<div class="alert  '.$class.'"><a class="close" data-dismiss="alert">×</a>'.$message.$button.'</div>';
			
			return '<div class="alert '. $class .' alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-info"></i> Mensagem!</h4>
                   ' .$message.$button.'
                  </div>';
                  
                  
                  
		}

		return null;
	}

	public function niceDate( &$date, $verbose = false ){

		if( $verbose )
			return '<i class="icon-calendar"></i> '. $this->Time->format( "d", $date ) .' de '. $this->months[$this->Time->format( "n", $date )] .' de '. $this->Time->format( "Y", $date ) .' <i class="icon-time"></i> '. $this->Time->format( "H:i:s", $date );

		return '<i class="icon-calendar"></i> '. $this->Time->format( "d/m/Y", $date ) .' <i class="icon-time"></i> '. $this->Time->format( "H:i:s", $date );
	}

	public function getHeader( &$controller, $action, $subtitle = null ){
		
		if( !$this->Session->check( "Auth.User.Profile" ) )
			return $this->output( "" );
		
		$permissions = &$this->Session->read( "Auth.User.Profile" );

		$tagOpen = '<div class="page-header"><h1>';
		$tagClose = '</h1></div>';

		if( $subtitle )
			return $tagOpen . $this->output( $subtitle ) . $tagClose;

		elseif( !empty( $permissions[ $controller ] ) )
			return $tagOpen . $this->output( $permissions[ $controller ][ 'controller_label' ] ) . $tagClose;

		else
			return null;
	}

	public function getMenu(){
		
		$string = '';
		$areas = &$this->Session->read( "Auth.User.Menu" );
		$permissions = &$this->Session->read( "Auth.User.Profile" );
		
		foreach ($areas as $area) {

			// se tiver permissao para controller/action
			if( !empty( $permissions[ $area['controller'] ][ 'action' ][ $area['action'] ] ) ){

				// nao eh submenu
				if( empty( $area[ 'AreaChild' ] ) )
					$string .= '<li class="'.$this->optionSelected( $area[ 'controller' ] ).'">'.$this->Html->link( $area[ 'controller_label' ], "/{$area['controller']}/{$area['action']}", array( 'escape' => false ) )."</li>\n";

				else { // submenu

					$string .= '<li class="dropdown">'.
						'<a href="#" class="dropdown-toggle" data-toggle="dropdown">'. $area[ 'controller_label' ] .' <b class="caret"></b></a>'.
					    '<ul class="dropdown-menu">'.
					    '<li class="'.$this->optionSelected( $area[ 'controller' ] ).'">'.$this->Html->link( $area[ 'controller_label' ], "/{$area['controller']}/{$area['action']}", array( 'escape' => false ) )."</li>\n";
					
					foreach( $area[ 'AreaChild' ] as $areaChild )
						if( !empty( $permissions[ $areaChild['controller'] ][ 'action' ][ $areaChild['action'] ] ) )
							$string .= '<li class="divider"></li><li class="'.$this->optionSelected( $areaChild[ 'controller' ] ).'">'.$this->Html->link( $areaChild[ 'controller_label' ], "/{$areaChild['controller']}/{$areaChild['action']}", array( 'escape' => false ) )."</li>\n";

					$string .= '</ul></li>';
				}
			}
		}
				
		return $this->output( $string );
	}
	
	public function getSubMenu( &$submenu, &$controllerName, $actionName ){
		
		if( !empty( $submenu ) ){
		
			$string			= "";
			$permissions	= &$this->Session->read( "Auth.User.Profile" );
			
			if( !empty( $permissions[ $controllerName ] ) ){
		
				foreach( $submenu as $action ){
					
					if( array_key_exists( $action, $permissions[ $controllerName ][ 'action' ] ) ){

						$action == $actionName ? $active = ' class="active"' : $active = null;
						empty( $this->iconClasses[ $action ] ) ? $icon = null : $icon = "<i class=\"{$this->iconClasses[$action]}\"></i> ";
						$string .= "<li{$active}>". $this->Html->link( $icon . $permissions[ $controllerName ][ 'actions_labels' ][ $action ], "/{$controllerName}/{$action}", array( 'class' => "icon {$action}", 'escape' => false ) ) ."</li>\n";
					}
				}
			}
		
			return '<ul id="submenu" class="nav nav-tabs">'. $string .'</ul>';
			
		} else
			return null;
	}

	private function optionSelected( &$option ){
		
		if( $this->Session->check( "Menu.{$option}" ) )
			return ' '.$this->Session->read( "Menu.{$option}" );
			
		return null;
	}

	public function isActive( $action, $active ){

		if( strtoupper($action) == strtoupper($active) )
			return 'active';

		return null;
	}
	
		public function boolYN( &$boolvalue){

		if( $boolvalue )
			return 'Sim';
			else return 'Não';

		 
	} 
	
	
	public function statusEdital($value){

	switch ($value) {
		case 'N':
			return "<span class='label label-info'>Não Publicado</span>";			
			break;
    case 'C':
        return  "<span class='label label-important'>Cancelado</span>";
        break;
    case 'P':
        return "<span class='label label-success'>Publicado</span>";
        break;
   case 0:
			return "<span class='label label-info'>Não Publicado</span>";	
			break;
        }

		 
	} 
	
	
	public function encerrado($value){
 		
	 if ($value <  date('Y-m-d')) {
		 
		 return "<span class='label label-important'>Encerrado</span>";			
			break;
		 
	 }
	 
	 else {return false;}

		 
	} 
	
	public function statusProposta($value){

	switch ($value) {
		case 'N':
			return "<span class='label'>Não Enviada</span>";			
			break;
    case 'C':
        return  "<span class='label label-important'>Cancelada</span>";
        break;
     case 'I':
        return  "<span class='label label-important'>Indeferida</span>";
        break;
    case 'D':
        return "<span class='label label-success'>Deferida</span>";
        break;
 
    case 'E':
			return "<span class='label label-info'>Enviada</span>";	
			break;
			
			case 0:
				return "<span class='label'>Não Enviada</span>";	
							break;
							
							
        }
        
        
        }

		 
	 
	

	
	public function boolAI( &$boolvalue){

		if( $boolvalue )
			return 'Ativo';
			else return 'Inativo';

		 
	} 
	
	
	
	public function iguais($val1,$val2){

 
		if ($val1 == null) {return "<span > - </span>";}
		if ($val2 == $val1) { return "<span class='label label-success'>Correto</span>";} else { return "<span class='label label-important'>Errado</span>";} 
		   
					         
        }
        
        
        public function resposta($val1){

 
		if ($val1 == null) {$string= "<span > - </span>";}
		if ($val1 === true) { $string =  "<span class='label label-success'>Correto</span>";} 
		if ($val1 === false) { $string =  "<span class='label label-important'>Errado</span>";} 
		   
		   
		   return $string;
						
		// debug($val1);
            
        
        }
        
        
        
         public function score($valor){

   
 
		if ($valor >= 80) { return  '<span class="badge badge-success">'.sprintf ("%.0f", $valor).'%'.'</span>';}
		   
		if (($valor >= 50) && ($valor < 80)) {return  '<span class="badge badge-warning">'.sprintf ("%.0f", $valor).'%'.'</span>';}
		
		if ($valor < 50) {return  '<span class="badge badge-important">'.sprintf ("%.0f", $valor).'%'.'</span>';}
		   
		   return $string;
		   
		    //echo ;
						
		// debug($val1);
            
        
        }
        
        
       public function paginas($questions){ 
        
          $count = count($questions);  
		  
		  $i= 0;  
		 
        
           $html = '<div class="btn-group">';
           
           $html = $html.'<a class="btn"href="#inicial" data-toggle="tab"> <span class="label label-info">início</span></a>'; 
          
             for ($i = 0; $i < $count; $i++) { 
          
          		   $html = $html.'<a class="btn" href="#'.$questions[$i]['id'].'" data-toggle="tab"> <span class="label label-info">'.($i+1).'</span></a>';
		  
		    } 
		    
		   $html = $html.'</div>';
		   
		   
		   return $html;
		   
		   
        }
        
        
        public function legendas($level){ 
        
        
        $html = '';
        
        $html = $html .'<table class="table table-condensed"><tr>';
        
         			
			 	switch ($level['Level']['layout']) {
        		case 0: // Lista
	        		 $html = $html . "<td class='well-white'><i class='icon-th-list' rel='tooltip' title='Layout em Lista' id='layout' ></i></td>";		
	        		break;
        		case 1:  // Página
			         $html = $html . "<td class='well-white'><i class='icon-circle-arrow-right' rel='tooltip' title='Layout em Página' id='layout' ></i></td>";		
	        		break;
			    case 2: // Grid
			    
			    	 
			        $html = $html . "<td class='well-white'><i class='icon-th'  rel='tooltip' title='Layout em Grid' id='layout'></i></td>";			 
	        		break;
     							
			}
			
			 
        
        if ($level['Level']['random_order']) {$html = $html . "<td class='well-white'><i class='icon-random'  rel='tooltip' title='Embaralhar a Ordem das perguntas' id='random' ></i></td>";}
        
         if ($level['Level']['video_url'] != null) {$html = $html . "<td class='well-white'><i class='icon-film'  rel='tooltip' title='Com vídeo' id='video'  ></i></td>";}

        
        
        
        return $html.'</tr></table>';
        
 
	}
	
	
	
	
	
	 public function preferences($preference){ 
	  	 
  	 
				
			switch ($preference['Preference']['widget_id']) {
        		
        		case 1: // Meus Placares
	        		 $html =  "<div class='well span2' style='width:25%;'>".$preference['Widget']['name']."</div>";		
	        		break;
        		case 2:  // Melhor do Jogo
        		
	        		$game_id = $preference['Preference']['param_1'];
        			$result = $preference['Score'];
        			   
			         $html =  "<div class='well span2' style='width:25%;' >[".$preference['Widget']['name']."]<h4><img src='img/o_gamecenter.png'style='width:20px;'> <a href='./gamecenter/game/".$result[1]['game_id']. "' >". 
			         $result[1]['game_name'].'</a></h4>'. "<span class='label'>". $result[1]['rank'].  "</span>". '   '.$result[1]['user']. '   '. ' [ '.$result[1]['placar']. ' ] '.
			         "</div>";	
			         
			         			
	        		break;
			    case 3:  // Meus Placar no jogo
			     
			      $game_id = $preference['Preference']['param_1'];
			      $user_id = $preference['Preference']['user_id'];
			      
			     // debug($preference);
			      
			  
			     
        			$scores = $preference['Score'];
        			   
        			 if (!(empty($scores))) {
        			  foreach ($scores as $result) {
	        			  
	        			  if ($result['user_id'] == $user_id ) {
		        			   $html =  "<div class='well span2' style='width:25%;'>[".$preference['Widget']['name']."]
		        			   <h4><img src='img/o_gamecenter.png'style='width:20px;'> 
		        			   <a href='./gamecenter/game/".$result['game_id']. "' >". $result['game_name'].'
		        			   </a>
		        			   </h4>'. "<span class='label'>". $result['rank'].  "</span>". '   '.$result['user']. '   '. ' [ '.$result['placar']. ' ] '.
		        			   "</div>";	
		        			   break;	
		        			  
	        			  } else {
		        			   $html =  "<div class='well span2' style='width:25%;'>[".$preference['Widget']['name']."]
		        			   <h4><img src='img/o_gamecenter.png'style='width:20px;'> <a href='./play/game/".$game_id. "' > ".$preference['Game']['Game']['name']."</a></h4>
		        			   Você não possui placar para este jogo <button>Jogar</button> </div>";	
		        			  
		        			  
	        			  }
	        			  
        			  } 
        			  }else {
		        			   $html =  "<div class='well span2' style='width:25%;'>[".$preference['Widget']['name']."]
		        			   <h4><img src='img/o_gamecenter.png'style='width:20px;'> <a href='./play/game/".$game_id. "' > ".$preference['Game']['Game']['name']."</a></h4>
		        			   Você não possui placar para este jogo <a class='btn' href='./play/game/".$game_id. "'>Jogar</a> </div>";	
}  
        			 
        			   
        			 
			          
	        		break;
     							
			}
			
			 return $html;
	  
			
		}
		
		// ========================= ALERTA GAME - SE PUBLICADO SEM NÍVEL =====================================
		
		public function alertas_game($game) {
	
		$alertas = array();
		
		 if (((count($game['Level'])) == 0)  && ($game['Game']['published'])) {
			 
			$alertas = array('msg'=>'<strong>Atenção!</strong> Este jogo está publicado mas não possui níveis cadastrados <br/><strong>Como Resolver?!</strong><br/>
			<ul>
				<li>Você pode despublicar o jogo</li>
				'.$this->Html->link('<i class="icon-question-sign icon-white"></i>Saiba Como', 
				  array('controller'=>'helps','action' => 'view',4), array('escape' => false,'class'=>'btn btn-info btn-mini', 'data-toggle'=>'modal','data-target'=>'#myModal')).'

				<li>Você pode Cadastrar Nível <br/>
				  '.$this->Html->link('<i class="icon-question-sign icon-white"></i>Saiba Como', 
				  array('controller'=>'helps','action' => 'view',5), array('escape' => false,'class'=>'btn btn-info btn-mini', 'data-toggle'=>'modal','data-target'=>'#myModal')).'
				
				  
				   '.$this->Html->link('<i class="icon-plus icon-white"></i> Cadastrar Nível', 
				  array('controller'=>'levels','action' => 'add',$game['Game']['id']), array('escape' => false,'class'=>'btn btn-success btn-mini', 'data-toggle'=>'modal','data-target'=>'#myModal')).'
				  
				</li>
			</ul>		
			');
		 }
		 
		 return $alertas;
		  		
	}
	// =========================  =====================================  =====================================
	
	// ========================= ALERTA NÍVEL - SE NIVEL SEM PERGUNTAS =====================================
	
		public function alertas_level($level) {
	
		$alertas = array();
		$i=0;
			  
			 	if ((count($level['Question'])) == 0) {
			 	
			 	$alertas[$i] = '<strong>Atenção!</strong> O Nível "'.$level['Level']['name'].'" não possui perguntas cadastradas <br/><strong>Como Resolver?!</strong><br/>
			<ul>
				 <li>Você deve cadastrar perguntas para este Nível <br/>
				   '.$this->Html->link('<i class="icon-question-sign icon-white"></i>Saiba Como', 
				  array('controller'=>'helps','action' => 'view',6), array('escape' => false,'class'=>'btn btn-info btn-mini', 'data-toggle'=>'modal','data-target'=>'#myModal')).'
				
				  
				   '.$this->Html->link('<i class="icon-plus icon-white"></i> Cadastrar pergunta', 
				  array('controller'=>'questions','action' => 'add',$level['Level']['id']), array('escape' => false,'class'=>'btn btn-success btn-mini', 'data-toggle'=>'modal','data-target'=>'#myModal')).'
				</li>
			</ul>		
			';
				 	$i++;
				 	
			 	} 
		 return $alertas;	 
		 }	
		 
		 
		// ========================= ALERTA NÍVELs - SE NIVELS SEM PERGUNTAS =====================================
		
		public function alertas_levels($levels) {
	
		$alertas = array();
		$i=0;
			 
			 foreach ($levels as $level):
			 
			
			  
			 	if ((count($level['Question'])) == 0) {
			 	
			 	$alertas[$i] = '<strong>Atenção!</strong> O Nível "'.$level['Level']['name'].'" não possui perguntas cadastradas <br/><strong>Como Resolver?!</strong><br/>
			<ul>
				 <li>Você deve cadastrar perguntas para este Nível <br/>
				   '.$this->Html->link('<i class="icon-question-sign icon-white"></i>Saiba Como', 
				  array('controller'=>'helps','action' => 'view',6), array('escape' => false,'class'=>'btn btn-info btn-mini', 'data-toggle'=>'modal','data-target'=>'#myModal')).'
				
				  
				   '.$this->Html->link('<i class="icon-plus icon-white"></i> Cadastrar pergunta', 
				  array('controller'=>'questions','action' => 'add',$level['Level']['id']), array('escape' => false,'class'=>'btn btn-success btn-mini', 'data-toggle'=>'modal','data-target'=>'#myModal')).'
				  
				</li>
			</ul>		
			';
				 	$i++;
				 	
			 	} 
			 endforeach;
		
		return $alertas;	 
		 }	
  
  // ========================= ALERTA RESPOSTA - SE PERGUNTA SEM RESPOSTA =====================================

  public function alertas_questions($questions) {
	
		$alertas = array();
		$i=0;
			 
			 foreach ($questions as $question):
			 
			
			  
			 	if ((count($question['Answer'])) == 0) {
			 	
			 	$alertas[$i] = '<strong>Atenção!</strong> A pergunta "'.$question['Question']['text'].'" não possui resposta cadastradas <br/><strong>Como Resolver?!</strong><br/>
			<ul>
				 <li>Você deve cadastrar respostas para esta pergunta <br/>
				   '.$this->Html->link('<i class="icon-question-sign icon-white"></i>Saiba Como', 
				  array('controller'=>'helps','action' => 'view',7), array('escape' => false,'class'=>'btn btn-info btn-mini', 'data-toggle'=>'modal','data-target'=>'#myModal')).'
				
				  
				   '.$this->Html->link('<i class="icon-plus icon-white"></i> Cadastrar resposta', 
				  array('controller'=>'answers','action' => 'add',$question['Question']['id']), array('escape' => false,'class'=>'btn btn-success btn-mini', 'data-toggle'=>'modal','data-target'=>'#myModal')).'
				  
				</li>
			</ul>		
			';
				 	$i++;
				 	
			 	} 
			 endforeach;
		
		return $alertas;	 
		 }	
		 
  
 // ========================= ALERTA RESPOSTA - SE PERGUNTA SEM RESPOSTA CERTA =====================================
	
	
}