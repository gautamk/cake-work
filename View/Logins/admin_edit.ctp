<div class="logins form">
<?php echo $this->Form->create('Login');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Login'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Login.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Login.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Logins'), array('action' => 'index'));?></li>
	</ul>
</div>
