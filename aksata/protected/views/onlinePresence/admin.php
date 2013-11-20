<?php
$this->breadcrumbs=array(
	'Online Presences'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OnlinePresence', 'url'=>array('index')),
	array('label'=>'Create OnlinePresence', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('online-presence-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Online Presences</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'online-presence-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'member',
		'service',
		'handle',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
