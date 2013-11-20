<?php
$this->breadcrumbs=array(
	'Circles',
);

$this->menu=array(
	array('label'=>'Create Circle', 'url'=>array('create')),
	array('label'=>'Manage Circle', 'url'=>array('admin')),
);
?>

<h1>Circles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
