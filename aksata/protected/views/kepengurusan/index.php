<?php
$this->breadcrumbs=array(
	'Kepengurusans',
);

$this->menu=array(
	array('label'=>'Create Kepengurusan', 'url'=>array('create')),
	array('label'=>'Manage Kepengurusan', 'url'=>array('admin')),
);
?>

<h1>Kepengurusans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
