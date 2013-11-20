<?php
$this->breadcrumbs=array(
	'External Activity Memberships'=>array('index'),
	$model->external_activity=>array('view','id'=>$model->external_activity),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExternalActivityMembership', 'url'=>array('index','member'=>$member)),
	array('label'=>'Create ExternalActivityMembership', 'url'=>array('create','member'=>$member)),
	array('label'=>'View ExternalActivityMembership', 'url'=>array('view', 'id'=>$model->external_activity,'member'=>$member)),
	array('label'=>'Manage ExternalActivityMembership', 'url'=>array('admin')),
);
?>

<h1>Update ExternalActivityMembership <?php echo $model->external_activity; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>