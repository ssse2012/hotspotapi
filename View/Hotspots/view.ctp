<div class="hotspots view">
<h2><?php  echo __('Hotspot');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotspot['Hotspot']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($hotspot['Hotspot']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hotspot['Hotspot']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($hotspot['Hotspot']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotspot['Group']['title'], array('controller' => 'groups', 'action' => 'view', $hotspot['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($hotspot['Hotspot']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($hotspot['Hotspot']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lon'); ?></dt>
		<dd>
			<?php echo h($hotspot['Hotspot']['lon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($hotspot['Hotspot']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo Dir'); ?></dt>
		<dd>
			<?php echo h($hotspot['Hotspot']['photo_dir']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotspot'), array('action' => 'edit', $hotspot['Hotspot']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotspot'), array('action' => 'delete', $hotspot['Hotspot']['id']), null, __('Are you sure you want to delete # %s?', $hotspot['Hotspot']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotspots'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotspot'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
