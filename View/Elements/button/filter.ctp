<?php
echo $this->Html->link('<span class="icon-filter icon-white"></span> ' . __d('admin', 'Filter'), 'javascript:;', array(
	'class' => 'btn btn-default',
	'id' => 'filter-toggle',
	'escape' => false,
	'onclick' => 'Admin.filterToggle(this);'
));