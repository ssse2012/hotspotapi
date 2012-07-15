<?php
App::uses('AppModel', 'Model');
/**
 * Hotspot Model
 *
 * @property Group $Group
 */
class Hotspot extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed


	public $actsAs = array(
	        'Upload.Upload' => array(
	            'photo' => array(
	                'fields' => array(
	                    'dir' => 'photo_dir'
	                )
	            )
	        )
	    );

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
