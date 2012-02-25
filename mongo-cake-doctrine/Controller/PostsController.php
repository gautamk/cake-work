<?php 

class PostsController extends AppController{
	public function index(){
		$result = $this->Post->find('all');
		print_r($result);
		die();
	}
}