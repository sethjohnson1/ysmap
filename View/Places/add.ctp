<div class="places form">
<?php echo $this->Form->create('Place'); ?>
	<fieldset>
		<legend><?php echo __('Add/Edit Place'); ?></legend>
	<?php
		if (isset($edit)){
			echo $this->Form->input('id');
		}
		echo $this->Form->input('name');
		echo $this->Form->input('classname');
		$checked=array();
		if (!isset($edit)) $checked=array('checked'=>'checked');
		echo $this->Form->input('visible',$checked);
		echo $this->Form->input('img');
		echo $this->Form->input('metatitle');
		echo $this->Form->input('metadescription');
		echo $this->Form->input('iscoutid');
		echo $this->Form->input('lat');
		echo $this->Form->input('lng');
		echo $this->Form->input('Layer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Places'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Layers'), array('controller' => 'layers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Layer'), array('controller' => 'layers', 'action' => 'add')); ?> </li>
	</ul>
</div>
