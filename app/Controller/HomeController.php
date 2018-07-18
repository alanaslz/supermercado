<?php

class HomeController extends AppController {
	
	/*----------------------------------------
	 * Atributtes
	----------------------------------------*/
	 
	public $name	= "Home";
	 
	public $label = 'home';

	public $gender = 'o';
	
         
	public $uses = array('Usuario','Modulo');//,'ModuloUsuario','ModuloOperacao');
  
	/*----------------------------------------
	 * Callbacks
	----------------------------------------*/
	
	public function beforeFilter(){
		
		$this->Auth->allow( 'index' );

	}
	
	/*----------------------------------------
	 * Actions
	----------------------------------------*/



public function info() {

	}
	
	
public function blank() {

	}
public function viagens() {

	}
	public function teste(){
		}
		
		
		
	 public function index(){
 

             
            $usuario = $this->Usuario->findById($this->Auth->user("id")); 
            
      
            
                
             if($usuario  == null)
             {
                $this->redirect(array('controller'=>'usuarios','action' => 'login')); 
             }
                     
             
      $this->set(compact('usuario'));
 
 
  	 
  	}
  	
  	public function contact() {

	}
	
	
	public function about() {

	}
        
        public function allow() {

	}
	
	
	public function search($param = null) {
	 
	
	} 
	
	public function cadastros() {

	}

}