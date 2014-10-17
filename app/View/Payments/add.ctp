<div class="payments form">
<?php echo $this->Form->create('Payment'); ?>
	<fieldset>
		<legend><?php echo __('Add Payment'); ?></legend>
	<?php
		echo $this->Form->input('datagerado');
		echo $this->Form->input('datapagamento');
		echo $this->Form->input('mesreferencia');
		echo $this->Form->input('valor');
		echo $this->Form->input('descricao');
		echo $this->Form->input('quitada');
		echo $this->Form->input('student_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Payments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dockets'), array('controller' => 'dockets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docket'), array('controller' => 'dockets', 'action' => 'add')); ?> </li>
	</ul>
</div>
