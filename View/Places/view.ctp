<div class="places view">
<h2><?php echo __('Place'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($place['Place']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($place['Place']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($place['Place']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($place['Place']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Classname'); ?></dt>
		<dd>
			<?php echo h($place['Place']['classname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($place['Place']['visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img'); ?></dt>
		<dd>
			<?php echo h($place['Place']['img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metatitle'); ?></dt>
		<dd>
			<?php echo h($place['Place']['metatitle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metadescription'); ?></dt>
		<dd>
			<?php echo h($place['Place']['metadescription']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iscoutid'); ?></dt>
		<dd>
			<?php echo h($place['Place']['iscoutid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($place['Place']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lng'); ?></dt>
		<dd>
			<?php echo h($place['Place']['lng']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Place'), array('action' => 'edit', $place['Place']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Place'), array('action' => 'delete', $place['Place']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $place['Place']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Places'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Place'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Layers'), array('controller' => 'layers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Layer'), array('controller' => 'layers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Layers'); ?></h3>
	<?php if (!empty($place['Layer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Classname'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th><?php echo __('Img'); ?></th>
		<th><?php echo __('Metatitle'); ?></th>
		<th><?php echo __('Metadescription'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($place['Layer'] as $layer): ?>
		<tr>
			<td><?php echo $layer['id']; ?></td>
			<td><?php echo $layer['name']; ?></td>
			<td><?php echo $layer['created']; ?></td>
			<td><?php echo $layer['modified']; ?></td>
			<td><?php echo $layer['classname']; ?></td>
			<td><?php echo $layer['visible']; ?></td>
			<td><?php echo $layer['img']; ?></td>
			<td><?php echo $layer['metatitle']; ?></td>
			<td><?php echo $layer['metadescription']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'layers', 'action' => 'view', $layer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'layers', 'action' => 'edit', $layer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'layers', 'action' => 'delete', $layer['id']), array('confirm' => __('Are you sure you want to delete # %s?', $layer['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Layer'), array('controller' => 'layers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
