<?php
/**
 * Place Fixture
 */
class PlaceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'classname' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'visible' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'img' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'metatitle' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'metadescription' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'iscoutid' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'lat' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'lng' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-02-13 16:54:26',
			'modified' => '2016-02-13 16:54:26',
			'classname' => 'Lorem ipsum dolor sit amet',
			'visible' => 1,
			'img' => 'Lorem ipsum dolor sit amet',
			'metatitle' => 'Lorem ipsum dolor sit amet',
			'metadescription' => 'Lorem ipsum dolor sit amet',
			'iscoutid' => 1,
			'lat' => 1,
			'lng' => 1
		),
	);

}
