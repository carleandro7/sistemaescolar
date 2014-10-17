<div class="schedules form">
<?php echo $this->Form->create('Schedule'); ?>
	<fieldset>
		<legend><?php echo __('Add Schedule'); ?></legend>
	<?php
		echo $this->Form->input('inicio');
		echo $this->Form->input('fim');
                echo $this->Form->input('dia');
                
	?>
                <INPUT TYPE="hidden" NAME="data[Schedule][discipline_groups_id]" VALUE="<?php echo key($disciplineGroups);?>">
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
