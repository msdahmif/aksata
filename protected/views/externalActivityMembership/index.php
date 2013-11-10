<?php
$this->breadcrumbs=array(
	'External Activity Memberships',
);

$this->menu=array(
	array('label'=>'Create ExternalActivityMembership', 'url'=>array('create','member'=>$member)),
	array('label'=>'Manage ExternalActivityMembership', 'url'=>array('admin')),
);
?>

<h1>External Activity Memberships</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
