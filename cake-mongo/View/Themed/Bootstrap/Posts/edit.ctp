<div class="posts form">
<?php echo $this->Form->create('Post' , array( 'type' => 'post' ));?>
	<fieldset>
 		<legend><?php __('Edit Post');?></legend>
	<?php
		echo $this->Form->hidden('_id');
		echo $this->Form->input('title');
		echo $this->Form->input('body');
		
	?>
	</fieldset>
	
	<?php 
		echo $this->Html->link(
		                       'Cancel and Go back', 
		                       array('action'=>'index'),
		                       array('class'=>'btn btn-danger btn-small ')
			);
	?>
	<input type="submit" value="Save" class="btn btn-success btn-large icon-ok">
<?php echo $this->Form->end();?>
</div>
<div class="actions">
</div>
