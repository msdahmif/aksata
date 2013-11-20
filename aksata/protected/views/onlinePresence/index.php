<?php
$this->breadcrumbs=array(
	'Online Presences',
);

$this->menu=array(
	array('label'=>'Create OnlinePresence', 'url'=>array('create')),
	array('label'=>'Manage OnlinePresence', 'url'=>array('admin')),
);
?>

<h1>Online Presences</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
