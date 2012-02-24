<div class="posts form">
<?php echo $this->Form->create('Post' , array( 'type' => 'post' ));?>
	<fieldset>
 		<legend><?php __('Edit Post');?></legend>
	<?php
		echo $this->Form->input('title',array('value'=>$edit_data['Post']['title']));
		echo $this->Form->input('body',array('value'=>$edit_data['Post']['body']));
	?>
	</fieldset>
<?php echo $this->Form->end('Save Post');?>
</div>
