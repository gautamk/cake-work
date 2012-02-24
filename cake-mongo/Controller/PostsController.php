<?php 
class PostsController extends AppController{
	public $name = 'Posts';

	public function index(){
		$params = array(
 			'fields' => array('title','body'),
 			'order'=>array('_id'=>-1),
 			'limit' => 35,
 			'page' => 1,
		);
		$results = $this->Post->find('all',$params);
		$this->set(compact('results'));
	}
	public function add(){
		if(!empty($this->data)){
			$this->Post->create();
			if($this->Post->save($this->data)){
				$this->flash('Post saved Successfully',array('action'=>'index'));
			}
		}
	}

	public function edit($id = null){
		if(!$id && empty($this->data)){
			$this->flash('Invalid Post',array('action'=>'index'));
		} 
		if(!empty($this->data)){
			if(
			   // Cannot get update to work , 
			   // Save creates a new entry in the db instead of editing it.
				   $this->Post->update(array('title','body'),
				   	$this->data['Post'],
				   	array('conditions'=>array('_id'=>$id))
				   )
			   ){
				$this->flash('Post was Edited',array('action'=>'index'));		
			}else{
				$this->flash('Post was not Saved, Error!',array('action'=>'index'));		
			}
		}
		if(empty($this->data)){
			print_r(
			        $this->Post->read( array($id,)  )
			        );die(); // Cannot figure out how to get this read to work

			//the Following works though does the samething
			$result = $this->data = $this->Post->find('first', 
			        array(
			              'conditions' => array('_id' => $id),
			              'fields'=>array('title','body'),
			              'limit'=>1,
			              )
			        );
			$this->set('edit_data',$result);
			
	}


	}
}