<?php
$this->breadcrumbs=array(
	'Program Memberships'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProgramMembership', 'url'=>array('index','member'=>$member)),
	array('label'=>'Manage ProgramMembership', 'url'=>array('admin')),
);
?>

<h1>Create ProgramMembership</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>