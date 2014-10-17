<div class="frequencies form">
<?php echo $this->Form->create('Frequency'); ?>
	<fieldset>
		<legend><?php echo __('Add Frequency'); ?></legend>
	<?php
		echo $this->Form->input('falta');
		echo $this->Form->input('classnote_id');
		echo $this->Form->input('discipline_students_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Frequencies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Classnotes'), array('controller' => 'classnotes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classnote'), array('controller' => 'classnotes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discipline Students'), array('controller' => 'discipline_students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline Students'), array('controller' => 'discipline_students', 'action' => 'add')); ?> </li>
	</ul>
</div>
