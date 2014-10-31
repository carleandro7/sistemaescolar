<div class="disciplineStudents index">
	<h2><?php echo __('Discipline Students'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('DisciplineStudent.nomeDisciplina', 'Disciplina'); ?></th>
			<th><?php echo $this->Paginator->sort('Students.nome', 'Estudante'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($disciplineStudents as $disciplineStudent): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($disciplineStudent['DisciplineStudent']['nomeDisciplina'], array('controller' => 'discipline_groups', 'action' => 'view', $disciplineStudent['DisciplineGroups']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($disciplineStudent['Students']['nome'], array('controller' => 'students', 'action' => 'view', $disciplineStudent['Students']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $disciplineStudent['DisciplineStudent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $disciplineStudent['DisciplineStudent']['id']), array(), __('Deseja deletar # %s da disciplina?', $disciplineStudent['Students']['nome'])); ?>
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

