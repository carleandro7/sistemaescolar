<div class="classnotes index">
    <?php echo $this->Html->link(__('Turma'), array('controller'=>'groups', 'action' => 'view', $classnotes[0]['DisciplineGroup']['group_id'])); ?>
	<h2><?php echo __('Classnotes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('assunto', 'Assunto'); ?></th>
			<th><?php echo $this->Paginator->sort('dataaula', 'Data da aula'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($classnotes as $classnote): ?>
	<tr>
		<td><?php echo h($classnote['Classnote']['assunto']); ?>&nbsp;</td>
                <td><?php echo h($classnote['Classnote']['dataaula']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $classnote['Classnote']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $classnote['Classnote']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $classnote['Classnote']['id']), array(), __('Deletar aula # %s?', $classnote['Classnote']['assunto'])); ?>
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
		<li><?php echo $this->Html->link(__('New Classnote'), array('action' => 'add', $id)); ?></li>
		
	</ul>
</div>
