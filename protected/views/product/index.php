<?php
$this->breadcrumbs=array(
	'Product',
);
?>
<h3><?php echo $name;?></h3>
<i><?php echo $category;?></i>
<br />
<br />
<p>Active: <?php if($active == 1) echo 'Yes'; else echo 'No';?></p>