<div class="groups view">
<h2><?php  echo __('Group');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($group['Group']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($group['Group']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($group['Group']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Group'), array('action' => 'edit', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Group'), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotspots'), array('controller' => 'hotspots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotspot'), array('controller' => 'hotspots', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Hotspots');?></h3>
	<?php if (!empty($group['Hotspot'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Lat'); ?></th>
		<th><?php echo __('Lon'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Photo Dir'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($group['Hotspot'] as $hotspot): ?>
		<tr>
			<td><?php echo $hotspot['id'];?></td>
			<td><?php echo $hotspot['title'];?></td>
			<td><?php echo $hotspot['created'];?></td>
			<td><?php echo $hotspot['modified'];?></td>
			<td><?php echo $hotspot['group_id'];?></td>
			<td><?php echo $hotspot['description'];?></td>
			<td><?php echo $hotspot['lat'];?></td>
			<td><?php echo $hotspot['lon'];?></td>
			<td><?php echo $hotspot['photo'];?></td>
			<td><?php echo $hotspot['photo_dir'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hotspots', 'action' => 'view', $hotspot['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hotspots', 'action' => 'edit', $hotspot['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hotspots', 'action' => 'delete', $hotspot['id']), null, __('Are you sure you want to delete # %s?', $hotspot['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotspot'), array('controller' => 'hotspots', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
