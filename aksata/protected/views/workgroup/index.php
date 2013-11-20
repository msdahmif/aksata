<?php
$this->breadcrumbs=array(
	'Workgroups',
);

$this->menu=array(
	array('label'=>'Create Workgroup', 'url'=>array('create')),
	array('label'=>'Manage Workgroup', 'url'=>array('admin')),
);
?>

<h1>Workgroups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
