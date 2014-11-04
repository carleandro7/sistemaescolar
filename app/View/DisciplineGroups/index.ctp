<div class="disciplineGroups index">
	<h2><?php echo __('Discipline Groups'); ?></h2>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo $this->Html->link(__('Adicionar'), array('action' => 'add')); ?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">

	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Discipline.nome','Disciplinas'); ?></th>
                        <th><?php echo $this->Paginator->sort('Teacher.nome','Professores'); ?></th>
			<th><?php echo $this->Paginator->sort('Group.nome', 'Turmas'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($disciplineGroups as $disciplineGroup): ?>
	<tr>
		
		<td>
			<?php echo $this->Html->link($disciplineGroup['Discipline']['nome'], array('controller' => 'disciplines', 'action' => 'view', $disciplineGroup['Discipline']['id'])); ?>
		</td>
		<td>
                        <?php echo $this->Html->link($disciplineGroup['Teacher']['nome'], array('controller' => 'teachers', 'action' => 'view', $disciplineGroup['Teacher']['id'])); ?>			
		</td>
		<td>
			<?php echo $this->Html->link($disciplineGroup['Group']['nome'], array('controller' => 'groups', 'action' => 'view', $disciplineGroup['Group']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $disciplineGroup['DisciplineGroup']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $disciplineGroup['DisciplineGroup']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $disciplineGroup['DisciplineGroup']['id']), array(), __('Deseja deletar disciplina # %s?', $disciplineGroup['Discipline']['nome'])); ?>
                        <?php echo $this->Html->link(__('Notas'), array('controller' => 'Bills', 'action' => 'index', $disciplineGroup['DisciplineGroup']['id'])); ?>
                        <?php echo $this->Html->link(__('Frequencia'), array('controller' => 'Classnotes', 'action' => 'index', $disciplineGroup['DisciplineGroup']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
                </div>
            </div>
        </div>
    </div>
</div>
        
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
