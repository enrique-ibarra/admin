<?php
$displayField = $value;
$belongsTo = null;

foreach ($data['belongsTo'] as $bt) {
	if (!empty($result[$bt['assoc']]['id'])) {
		$belongsTo = $bt;
		break;
	}
}

if (!$belongsTo) { ?>

	<span class="belongs-to text-error">INVALID_ASSOC</span>

<?php } else {
	$foreignModel = $belongsTo['assoc'];

	if (isset($result[$foreignModel][$model->{$foreignModel}->displayField])) {
		$displayField = $result[$foreignModel][$model->{$foreignModel}->displayField];
	}

	echo $this->Html->link($displayField, array(
		'plugin' => 'admin',
		'controller' => 'crud',
		'action' => 'read',
		'model' => Inflector::underscore($belongsTo['model']),
		$result[$model->alias][$field]
	), array(
		'class' => 'belongs-to'
	));
}