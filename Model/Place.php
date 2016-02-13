<?php
App::uses('AppModel', 'Model');
/**
 * Place Model
 *
 * @property Layer $Layer
 */
class Place extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Layer' => array(
			'className' => 'Layer',
			'joinTable' => 'layers_places',
			'foreignKey' => 'place_id',
			'associationForeignKey' => 'layer_id',
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
