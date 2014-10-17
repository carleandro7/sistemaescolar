<div class="disciplineStudents form">
<?php echo $this->Form->create('DisciplineStudent'); ?>
	<fieldset>
		<legend><?php echo __('Edit Discipline Student'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('status');
		echo $this->Form->input('mediafinal');
		echo $this->Form->input('discipline_groups_id');
		echo $this->Form->input('students_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DisciplineStudent.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DisciplineStudent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Discipline Students'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Discipline Groups'), array('controller' => 'discipline_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline Groups'), array('controller' => 'discipline_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Students'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
