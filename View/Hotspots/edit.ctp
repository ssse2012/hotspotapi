<div class="hotspots form">
<?php echo $this->Form->create('Hotspot', array('type' => 'file'));?>
	<fieldset>
		<legend><?php echo __('Edit Hotspot'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('group_id');
		echo $this->Form->input('description');
		echo $this->Form->input('lat');
		echo $this->Form->input('lon');
		echo $this->Form->input('photo', array('type' => 'file'));
		echo $this->Form->input('photo_dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hotspot.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Hotspot.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hotspots'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
