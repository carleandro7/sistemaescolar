<div class="frequencies view">
<h2><?php echo __('Frequency'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Falta'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['falta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Classnote'); ?></dt>
		<dd>
			<?php echo $this->Html->link($frequency['Classnote']['id'], array('controller' => 'classnotes', 'action' => 'view', $frequency['Classnote']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discipline Students'); ?></dt>
		<dd>
			<?php echo $this->Html->link($frequency['DisciplineStudents']['id'], array('controller' => 'discipline_students', 'action' => 'view', $frequency['DisciplineStudents']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Frequency'), array('action' => 'edit', $frequency['Frequency']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Frequency'), array('action' => 'delete', $frequency['Frequency']['id']), array(), __('Are you sure you want to delete # %s?', $frequency['Frequency']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Frequencies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Frequency'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classnotes'), array('controller' => 'classnotes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classnote'), array('controller' => 'classnotes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discipline Students'), array('controller' => 'discipline_students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline Students'), array('controller' => 'discipline_students', 'action' => 'add')); ?> </li>
	</ul>
</div>
