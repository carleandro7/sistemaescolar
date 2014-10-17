<div class="disciplineStudents index">
	<h2><?php echo __('Discipline Students'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('mediafinal'); ?></th>
			<th><?php echo $this->Paginator->sort('discipline_groups_id'); ?></th>
			<th><?php echo $this->Paginator->sort('students_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($disciplineStudents as $disciplineStudent): ?>
	<tr>
		<td><?php echo h($disciplineStudent['DisciplineStudent']['id']); ?>&nbsp;</td>
		<td><?php echo h($disciplineStudent['DisciplineStudent']['status']); ?>&nbsp;</td>
		<td><?php echo h($disciplineStudent['DisciplineStudent']['mediafinal']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($disciplineStudent['DisciplineGroups']['id'], array('controller' => 'discipline_groups', 'action' => 'view', $disciplineStudent['DisciplineGroups']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($disciplineStudent['Students']['nome'], array('controller' => 'students', 'action' => 'view', $disciplineStudent['Students']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $disciplineStudent['DisciplineStudent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $disciplineStudent['DisciplineStudent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $disciplineStudent['DisciplineStudent']['id']), array(), __('Are you sure you want to delete # %s?', $disciplineStudent['DisciplineStudent']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Discipline Student'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Discipline Groups'), array('controller' => 'discipline_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline Groups'), array('controller' => 'discipline_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Students'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
