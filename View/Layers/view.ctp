<div class="layers view">
<h2><?php echo __('Layer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($layer['Layer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($layer['Layer']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($layer['Layer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($layer['Layer']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Classname'); ?></dt>
		<dd>
			<?php echo h($layer['Layer']['classname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($layer['Layer']['visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img'); ?></dt>
		<dd>
			<?php echo h($layer['Layer']['img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metatitle'); ?></dt>
		<dd>
			<?php echo h($layer['Layer']['metatitle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metadescription'); ?></dt>
		<dd>
			<?php echo h($layer['Layer']['metadescription']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Layer'), array('action' => 'edit', $layer['Layer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Layer'), array('action' => 'delete', $layer['Layer']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $layer['Layer']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Layers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Layer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Places'), array('controller' => 'places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Place'), array('controller' => 'places', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Places'); ?></h3>
	<?php if (!empty($layer['Place'])): ?>
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
		<th><?php echo __('Iscoutid'); ?></th>
		<th><?php echo __('Lat'); ?></th>
		<th><?php echo __('Lng'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($layer['Place'] as $place): ?>
		<tr>
			<td><?php echo $place['id']; ?></td>
			<td><?php echo $place['name']; ?></td>
			<td><?php echo $place['created']; ?></td>
			<td><?php echo $place['modified']; ?></td>
			<td><?php echo $place['classname']; ?></td>
			<td><?php echo $place['visible']; ?></td>
			<td><?php echo $place['img']; ?></td>
			<td><?php echo $place['metatitle']; ?></td>
			<td><?php echo $place['metadescription']; ?></td>
			<td><?php echo $place['iscoutid']; ?></td>
			<td><?php echo $place['lat']; ?></td>
			<td><?php echo $place['lng']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'places', 'action' => 'view', $place['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'places', 'action' => 'edit', $place['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'places', 'action' => 'delete', $place['id']), array('confirm' => __('Are you sure you want to delete # %s?', $place['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Place'), array('controller' => 'places', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
