<div class="layers form">
<?php echo $this->Form->create('Layer'); ?>
	<fieldset>
		<legend><?php echo __('Add/Edit Layer'); ?></legend>
	<?php
		if (isset($edit)){
			echo $this->Form->input('id');
		}
		echo $this->Form->input('name');
		echo $this->Form->input('classname');
		$checked=array();
		if (!isset($edit)) $checked=array('checked'=>'checked');
		echo $this->Form->input('visible');
		echo $this->Form->input('img');
		echo $this->Form->input('metatitle');
		echo $this->Form->input('metadescription');
		echo $this->Form->input('Place');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Layers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Places'), array('controller' => 'places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Place'), array('controller' => 'places', 'action' => 'add')); ?> </li>
	</ul>
</div>
