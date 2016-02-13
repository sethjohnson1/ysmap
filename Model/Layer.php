<?php
App::uses('AppModel', 'Model');
/**
 * Layer Model
 *
 * @property Place $Place
 */
class Layer extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Place' => array(
			'className' => 'Place',
			'joinTable' => 'layers_places',
			'foreignKey' => 'layer_id',
			'associationForeignKey' => 'place_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
