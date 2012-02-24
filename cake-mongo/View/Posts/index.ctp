<?php 
	echo $this->Html->link('Add Data','add');

 ?>
<table>
	<tr>
 		<th>ID</th>
 		<th>Title</th>
 		<th>Body</th>
 		<th>Actions</th>
 	</tr>
 <?php foreach ($results as $result):  ?>
 	<tr>
 		<td><?php echo $result['Post']['_id']; ?></td>
 		<td><?php echo $result['Post']['title']; ?></td>

 		<td><?php echo $result['Post']['body']; ?></td>
 		<td>
 			[<?php echo $this->Html->link('Edit','edit/'.$result['Post']['_id']); ?>]
 			[<?php echo $this->Html->link('Delete','delete/'.$result['Post']['_id']); ?>]
 		</td>
 	</tr>
 <?php endforeach; ?>
 </table>