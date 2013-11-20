<?php
$this->breadcrumbs=array(
	'Program Memberships',
);

$this->menu=array(
	array('label'=>'Create ProgramMembership', 'url'=>array('create','member'=>$member)),
	array('label'=>'Manage ProgramMembership', 'url'=>array('admin')),
);
?>

<h1>Program Memberships</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
