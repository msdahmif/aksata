<?php
$this->breadcrumbs=array(
	'External Activity Memberships'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExternalActivityMembership', 'url'=>array('index','member'=>$member)),
	array('label'=>'Manage ExternalActivityMembership', 'url'=>array('admin')),
);
?>

<h1>Create ExternalActivityMembership</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>