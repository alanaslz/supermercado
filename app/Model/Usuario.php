<?php

App::uses('AuthComponent', 'Controller/Component');
/**
 * Usuario Model
 *
 * @property Role $Role
 */
class Usuario extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
    
    public $name = 'Usuario';
    
    public function beforeSave($options = array()) {
        if (!empty($this->data['Usuario']['password'])) {
            $this->data['Usuario']['password'] = AuthComponent::password($this->data['Usuario']['password']);
        }
        return true;
    }
	public $validate = array(
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
	);
	
	var $hasAndBelongsToMany = array(
        'Modulo' => array(
            'className' => 'Modulo',
            'joinTable' => 'modulo_usuarios',
            'foreignKey' => 'usuario_id',
            'associationForeignKey' => 'modulo_id',
            "unique" => true,
        ),
    );  
    
    
}
