
<div style="width:700px; margin:auto;">
	<?php echo $this->Html->link('Add data', array('action'=>'add'),array('class'=>'btn btn-primary')); ?>
	<br>
	<br>
	<?php if($results): ?>
		<table class="table-striped table-bordered table-condensed">
			<tr>
				<th>_id</th>
				<th>Title</th>
				<th>Body</th>
				<th>Actions</th>
			</tr>
		<?php foreach($results as $result): ?>
		<tr>
			<td><?php echo $result['Post']['_id']; ?></td>
			<td><?php echo $result['Post']['title']; ?></td>
			<td><?php echo $result['Post']['body']; ?></td>
			<td>

					<?php echo $this->Html->link('edit','edit/'.$result['Post']['_id'],array('class'=>'btn btn-info')); ?>
					<?php echo $this->Html->link('delete','delete/'.$result['Post']['_id'],array('class'=>'btn btn-danger')); ?>

			</td>
		</tr>

		<?php endforeach; ?>
		</table>
	<?php else: ?>
		<h4>No posts available , Add one !</h4>
	<?php endif; ?>
</div>