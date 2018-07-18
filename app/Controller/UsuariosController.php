<?php
App::uses('AppController', 'Controller');



/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 */
class UsuariosController extends AppController {
	
	public $uses = array('Usuario','Modulo');
	//public $uses = array('Colaborador','Usuario','Diaria');
	
	var $components=array("Email","Session");
    var $helpers=array("Html","Form","Session");


	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('logout');
    }
    
    
/*
    public function add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('Usuário salvo com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Usuário não pode ser salvo, favor tentar novamente!'));
			}
		}
		$roles = $this->Usuario->Role->find('list');
		$this->set(compact('roles'));
	}
*/
	
	

/**
 * index method
 *
 * @return void
 */
                                                                     
  
	public function admin_index() {
             $this->paginate = array('limit'=>50);
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
		$this->set('usuario', $this->Usuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('Usuário salvo com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Usuário não pode ser salvo, favor tentar novamente!'));
			}
		}
		$roles = $this->Usuario->Role->find('list');
// 		$colaboradores = $this->Usuario->Colaborador->find('list', array('order' => array('Colaborador.name' => 'asc')));
		


		$modulos = $this->Modulo->find('list');
		$this->set(compact('roles','modulos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		
  		 		
		
		if ($this->request->is('post') || $this->request->is('put')) {
// 	   debug($this->data); exit;
			  
			if ($this->Usuario->save($this->request->data)) {
				 
								 
				$this->Session->setFlash(__('Usuário salvo com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Usuário não pode ser salvo, favor tentar novamente!'));
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
			$this->request->data = $this->Usuario->find('first', $options);
			
			 
			  
		}
		$roles = $this->Usuario->Role->find('list');
// 		$colaboradores = $this->Usuario->Colaborador->find('list', array('order' => array('Colaborador.name' => 'asc')));
		
	
		$modulos = $this->Modulo->find('list');
		$this->set(compact('roles','modulos'));
	 
	 
	 
	 
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('Usuario deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Usuario was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
        
    public function login()
    {
	    
	    $this->layout = 'login';
        
        $this->set('title_for_layout', __('Log in'));
        if ($this->request->is('post')) {
            
            
            



            
           
            
            if ($this->Auth->login()) {
                
       
                
                
                self::loadmodulos();
                
                //debug('entrou');
                
               //debug($this->Auth->redirect());
                
               // return $this->redirect($this->Auth->redirect());
               
               
               
               
               
                return $this->redirect(array('controller'=>'home','action'=>'index'));
                
            } else {
                $this->Session->setFlash($this->Auth->authError, 'default', array(), 'auth');
                $this->redirect($this->Auth->loginAction);
            }
        }
    }
  


    public function logout()
    {
        $this->Session->destroy('menu');
        $this->Session->setFlash(__('Deslogado com sucesso!'), 'default', array('class' => 'success'));
        $this->redirect($this->Auth->logout());
         
    }
      public function admin_logout()
    {
        
        $this->Session->destroy('menu');
        $this->redirect('/usuarios/login');
        $this->Session->setFlash(__('Deslogado com sucesso.'), 'default', array('class' => 'success'));
    }
    
    function senha() {
        
          if ($this->request->is('post')) {
                 $userId = $this->Auth->user('id');
                 $senha=  AuthComponent::password($this->data['Usuario']['password']);
                 $nova_senha= $this->data['Usuario']['newpassword'];
                        //recuperar a senha gravada no banco
                         $getacesso = $this->Usuario->find('first', array('fields'=>array('username','password'),'conditions' => array('Usuario.id' => $userId,'password'=>$senha)));

                         if($getacesso != null)
                         {
                              $this->Session->setFlash(__('Senhas alterada com sucesso!'));
                              $this->Usuario->id=$userId;
                              $this->Usuario->saveField('username',$getacesso['Usuario']['username']);
                             $this->Usuario->saveField('password',$nova_senha);
                             $this->redirect(array('controller'=>'home','action' => 'index'));
                           
                         }else{
                             
                             $this->Session->setFlash('Senha Inválida');
                         }
                         
                         
                  
		}
             
	}
	
	 
	function cadastro() {
         $userId = $this->Auth->user('id');
         
         
        if (!$this->Usuario->exists($userId)) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('Usuário salvo com sucesso!'));
				$this->redirect(array('controller'=>'pesquisador','action' => 'index'));
			} else {
				$this->Session->setFlash(__('Usuário não pode ser salvo, favor tentar novamente!'));
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $userId));
			$this->request->data = $this->Usuario->find('first', $options);
		}
		//$roles = $this->Usuario->Role->find('list');
		//$this->set(compact('roles'));
           
             
	}
	
	
	
	// =================== recuperar senha ===========================
	
	function recuperar(){
		//$this->layout="signup";
		 $this->layout = 'login';
		 
		$this->Usuario->recursive=-1;
		if(!empty($this->data))
		
		//debug($this->data); exit;
		{
			if(empty($this->data['Usuario']['email']))
			{
				$this->Session->setFlash('Please Provide Your Email Address that You used to Register with Us');
			}
			else
			{
				$email=$this->data['Usuario']['email'];
				$fu=$this->Usuario->find('first',array('conditions'=>array('Usuario.email'=>$email)));
				 
				if($fu)
				{
					//debug($fu); exit;
					if($fu['Usuario']['status'])
					{
						$key = Security::hash(String::uuid(),'sha512',true);
						$hash=sha1($fu['Usuario']['username'].rand(0,100));
						$url = Router::url( array('controller'=>'usuarios','action'=>'reset'), true ).'/'.$key.'#'.$hash;
						$ms=$url;
						$ms=wordwrap($ms,1000);
						//debug($url);
						$fu['Usuario']['token']=$key;
						$this->Usuario->id=$fu['Usuario']['id'];
						if($this->Usuario->saveField('token',$fu['Usuario']['token'])){

							//============Email================//

							
						    $email = new CakeEmail('smtp');
						    $email->to($fu['Usuario']['email']);
							$email->subject('Recuperar Senha');
							$email->send($ms); // or use a template etc
							
							$this->Session->setFlash("Acesse o seu email para recuperar a senha");
 
							//============EndEmail=============//
						}
						else{
							$this->Session->setFlash("Aconteceu um erro ao gerar o link para recuperar senha. Tente Novamente!");
						}
					}
					else
					{
						$this->Session->setFlash('Esta conta não está ativa no momento');
					}
				}
				else
				{
					$this->Session->setFlash('Este email não foi encontrado na nossa base de dados');
				}
			}
		}
	}
	
	
	// ==========================
	
	
	function reset($token=null){
		
		debug($token); //exit;
	 	$this->layout = 'login';
		$this->Usuario->recursive=-1;
		if(!empty($token)){
			$u=$this->Usuario->findBytoken($token);
			// $this->set(compact('token'));
			 //debug($u);
			if($u){
				 $this->Session->write('token',  $token);
				
				$this->Usuario->id=$u['Usuario']['id'];
				if(!empty($this->data)){
					debug($this->data);exit;
					
					$this->Usuario->data=$this->data;
					$this->Usuario->data['Usuario']['username']=$u['Usuario']['username'];
					$new_hash=sha1($u['Usuario']['username'].rand(0,100));//created token
					$this->Usuario->data['Usuario']['token']=$new_hash;
					if($this->Usuario->validates(array('fieldList'=>array('password','password_confirm')))){
						
						 
						if($this->Usuario->save($this->Usuario->data))
						{
							$this->Session->setFlash('Password Has been Updated');
							// $this->redirect(array('controller'=>'usuarios','action'=>'login'));
						}

					}
					else{

						$this->set('errors',$this->Usuario->invalidFields());
					}
				}
			}
			else
			{
				$this->Session->setFlash('Token Corrupted,,Please Retry.the reset link work only for once.');
			}
		}else{
			//$this->redirect('/');
		}
	}




        
private function loadModulos()
{
    
    if($this->Session->read('modulos') == null) 
    {
             $id_user = $this->Auth->user("id");
             $this->loadModel('Modulo');
             $this->loadModel('ModuloUsuario');
             $this->loadModel('ModuloOperacao');

             $modulos =  $this->ModuloUsuario->find('all',array('conditions'=>array('usuario_id'=>$id_user),'order'=>'Modulo.ordem asc')); 
             $operacoes = $this->ModuloOperacao->find('all',array('order'=>'ModuloOperacao.ordem asc')); 
             
            
             $this->set(compact('modulos'));
             $this->set(compact('operacoes'));
             $this->Session->write('modulos',  $modulos);
             $this->Session->write('operacoes',  $operacoes);
    }
  }
 private function loadMenu()
{
    
    if($this->Session->read('menu') == null) 
    {
             $id_user = $this->Auth->user("id");
             $this->loadModel('Modulo');
             $this->loadModel('ModuloUsuario');
             $this->loadModel('ModuloOperacao');

             $modulos =  $this->ModuloUsuario->find('all',array('conditions'=>array('usuario_id'=>$id_user),'order'=>'Modulo.ordem asc')); 
             $operacoes = $this->ModuloOperacao->find('all',array('order'=>'ModuloOperacao.ordem asc')); 
             $this->set(compact('modulos'));
             $this->set(compact('operacoes'));
            
            $j=0;
  $str_menu =               '<div class="nav-collapse collapse navbar-inverse-collapse">
                                <ul class="nav">';   
                                        foreach($modulos as $modulo ):
                                        
                                        if ($j < 5) {
  $str_menu = $str_menu .               '<li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">'. $modulo['Modulo']['descricao'] .'<b class="caret"></b></a>';
                                                $i=0;
  $str_menu =  $str_menu .                      '<ul class="dropdown-menu">';
                                                   foreach($operacoes as $operacao ):
                                                        if($modulo['ModuloUsuario']['modulo_id'] == $operacoes[$i]['ModuloOperacao']['modulo_id'])
                                                        {
 $str_menu =  $str_menu .                                    "<li><a href='". $this->webroot.$operacoes[$i]['ModuloOperacao']['modelo'].'/'.$operacoes[$i]['ModuloOperacao']['action']."'>".$operacoes[$i]['ModuloOperacao']['name'].'</a></li>';
                                
                                                        } 
                                
                                                   $i++;
                                                    endforeach;
  $str_menu =  $str_menu .                      '</ul></li>';
  
  $j++; }
                                         endforeach;
 $str_menu =  $str_menu .   ' </ul></div>';
          
$this->Session->write('menu',  $str_menu);
    }
  } 
  
}
