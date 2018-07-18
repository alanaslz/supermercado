<?php
App::uses('AppModel', 'Model');
/**
 * ProdutosVenda Model
 *
 * @property Produto $Produto
 * @property Venda $Venda
 */
class ProdutosVenda extends AppModel {


 public $virtualFields = array(
        'preco_total' => '(ProdutosVenda.qtd * ProdutosVenda.preco_unit)'
        );
        
        
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'produto_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'venda_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Produto' => array(
			'className' => 'Produto',
			'foreignKey' => 'produto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Venda' => array(
			'className' => 'Venda',
			'foreignKey' => 'venda_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
