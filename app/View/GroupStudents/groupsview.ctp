<div class="groupstudents index">
<h2><?php echo __('Aluno: '.$groupStudents[0]['Student']['nome'] ); ?></h2>

        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                         
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Group.nome', 'Turmas'); ?></th>
			<th><?php echo $this->Paginator->sort('datacadastro'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($groupStudents as $groupStudent): ?>
	<tr>
		<td>
                    <?php echo $this->Html->link($groupStudent['Group']['nome'], array('controller' => 'groups', 'action' => 'view', $groupStudent['Group']['id'])); ?>
		</td>
		<td><?php echo h($groupStudent['GroupStudent']['datacadastro']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('view', array('controller' => 'disciplinestudents', 'action' => 'disciplinegroups', $groupStudent['Student']['id'], $groupStudent['Group']['id'])); ?>
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
