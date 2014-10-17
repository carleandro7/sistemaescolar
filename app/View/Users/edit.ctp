<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('fone');
		echo $this->Form->input('imagem');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('status');
		echo $this->Form->input('username');
		echo $this->Form->input('school_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
