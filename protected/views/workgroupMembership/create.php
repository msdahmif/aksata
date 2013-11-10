<?php
$this->breadcrumbs=array(
	'Workgroup Memberships'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WorkgroupMembership', 'url'=>array('index','member'=>$member)),
	array('label'=>'Manage WorkgroupMembership', 'url'=>array('admin')),
);
?>

<h1>Create WorkgroupMembership</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>