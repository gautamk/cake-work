<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE HTML>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		

		echo $this->Html->css('bootstrap.min');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container" style="text-align:center;">
		<div id="header span12 " >
			<h1><?php echo $title_for_layout; ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<footer id="footer">
			<?php echo $this->element('sql_dump'); ?>
		</footer>
	</div>
	


	

	<!-- Assets -->

	<?php
		echo $this->Html->script('jquery-1.7.1.min'); 
		echo $this->Html->script('bootstrap.min'); 
	?>
	<script type="text/javascript">
		$(document).ready(function(){
			
		});
	</script>
</body>
</html>