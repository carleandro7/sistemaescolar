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
