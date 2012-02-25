<?php echo $this->Html->link('Add data', 'add'); ?>
<br>
<br>
<table>
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
		<button>
			<?php echo $this->Html->link('edit','edit/'.$result['Post']['_id']); ?>
		</button>
		<button>
			<?php echo $this->Html->link('delete','delete/'.$result['Post']['_id']); ?>
		</button>
	</td>
</tr>

<?php endforeach; ?>
</table>