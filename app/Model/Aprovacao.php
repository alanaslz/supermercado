<?php
App::uses('AppModel', 'Model');
/**
 * Aprovacao Model
 *
 * @property Viagem $Viagem
 * @property Colaborador $Colaborador
 */
class Aprovacao extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'viagem_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'colaborador_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'Viagem' => array(
			'className' => 'Viagem',
			'foreignKey' => 'viagem_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Colaborador' => array(
			'className' => 'Colaborador',
			'foreignKey' => 'colaborador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
