<div class="posts form">
<?php echo $this->Form->create('Post' , array( 'type' => 'post' ));?>
	<fieldset>
 		<legend><?php __('Add Post');?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end('Add Post');?>
</div>
