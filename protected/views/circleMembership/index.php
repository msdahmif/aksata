<?php
$this->breadcrumbs=array(
	'Circle Memberships',
);

$this->menu=array(
	array('label'=>'Create CircleMembership', 'url'=>array('create','id'=>$id)),
	array('label'=>'Manage CircleMembership', 'url'=>array('admin')),
);
?>

<h1>Circle Memberships</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
