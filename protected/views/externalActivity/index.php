<?php
$this->breadcrumbs=array(
	'External Activities',
);

$this->menu=array(
	array('label'=>'Create ExternalActivity', 'url'=>array('create')),
	array('label'=>'Manage ExternalActivity', 'url'=>array('admin')),
);
?>

<h1>External Activities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
