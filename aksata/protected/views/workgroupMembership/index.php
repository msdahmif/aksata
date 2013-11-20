<?php
$this->breadcrumbs=array(
	'Workgroup Memberships',
);

$this->menu=array(
	array('label'=>'Create WorkgroupMembership', 'url'=>array('create','member'=>$member)),
	array('label'=>'Manage WorkgroupMembership', 'url'=>array('admin')),
);
?>

<h1>Workgroup Memberships</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
