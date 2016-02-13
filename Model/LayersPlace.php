<?php
App::uses('AppModel', 'Model');
/**
 * LayersPlace Model
 *
 * @property Layer $Layer
 * @property Place $Place
 */
class LayersPlace extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Layer' => array(
			'className' => 'Layer',
			'foreignKey' => 'layer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Place' => array(
			'className' => 'Place',
			'foreignKey' => 'place_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
