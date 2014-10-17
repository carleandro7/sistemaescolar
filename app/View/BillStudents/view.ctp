<div class="billStudents view">
<h2><?php echo __('Bill Student'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($billStudent['BillStudent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota'); ?></dt>
		<dd>
			<?php echo h($billStudent['BillStudent']['nota']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bill Id'); ?></dt>
		<dd>
			<?php echo h($billStudent['BillStudent']['bill_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discipline Student Id'); ?></dt>
		<dd>
			<?php echo h($billStudent['BillStudent']['discipline_student_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bill Student'), array('action' => 'edit', $billStudent['BillStudent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bill Student'), array('action' => 'delete', $billStudent['BillStudent']['id']), array(), __('Are you sure you want to delete # %s?', $billStudent['BillStudent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bill Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bill Student'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discipline Students'), array('controller' => 'discipline_students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline Students'), array('controller' => 'discipline_students', 'action' => 'add')); ?> </li>
	</ul>
</div>
