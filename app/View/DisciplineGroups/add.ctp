<div class="disciplineGroups form">
<?php echo $this->Form->create('DisciplineGroup'); ?>
	<fieldset>
		<legend><?php echo __('Add Discipline Group'); ?></legend>
	<?php
		echo $this->Form->input('teacher_id');
		echo $this->Form->input('discipline_id');
		echo $this->Form->input('group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
