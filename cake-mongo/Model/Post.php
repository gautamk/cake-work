<?php 

class Post extends AppModel{
	var $mongoSchema = array(
		'title' => array('type'=>'string'),
		'body' => array('type'=>'text'),
		'created'=>array('type'=> 'datetime')
	);
}