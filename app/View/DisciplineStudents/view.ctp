<div class="disciplineStudents view">
<h2><?php echo __('Discipline Student'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($disciplineStudent['DisciplineStudent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($disciplineStudent['DisciplineStudent']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mediafinal'); ?></dt>
		<dd>
			<?php echo h($disciplineStudent['DisciplineStudent']['mediafinal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discipline Groups'); ?></dt>
		<dd>
			<?php echo $this->Html->link($disciplineStudent['DisciplineGroups']['id'], array('controller' => 'discipline_groups', 'action' => 'view', $disciplineStudent['DisciplineGroups']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Students'); ?></dt>
		<dd>
			<?php echo $this->Html->link($disciplineStudent['Students']['id'], array('controller' => 'students', 'action' => 'view', $disciplineStudent['Students']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Discipline Student'), array('action' => 'edit', $disciplineStudent['DisciplineStudent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Discipline Student'), array('action' => 'delete', $disciplineStudent['DisciplineStudent']['id']), array(), __('Are you sure you want to delete # %s?', $disciplineStudent['DisciplineStudent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Discipline Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline Student'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discipline Groups'), array('controller' => 'discipline_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline Groups'), array('controller' => 'discipline_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Students'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
