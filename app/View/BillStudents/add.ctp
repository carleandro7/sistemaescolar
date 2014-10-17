<div class="billStudents form">
<?php echo $this->Form->create('BillStudent'); ?>
	<fieldset>
		<legend><?php echo __('Add Bill Student'); ?></legend>
	<?php
		echo $this->Form->input('nota');
		echo $this->Form->input('bill_id');
		echo $this->Form->input('discipline_student_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bill Students'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Discipline Students'), array('controller' => 'discipline_students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline Students'), array('controller' => 'discipline_students', 'action' => 'add')); ?> </li>
	</ul>
</div>
