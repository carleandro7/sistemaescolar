<div class="groupstudents index">
<h2><?php echo __('Group Students'); ?></h2>

        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $this->Html->link(__('Adicionar'), array('action' => 'addstudents')); ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                         
	<thead>
	<tr>
                        <th><?php echo $this->Paginator->sort('Student.nome','Estudante'); ?></th>
			<th><?php echo $this->Paginator->sort('Group.nome', 'Turmas'); ?></th>
			<th><?php echo $this->Paginator->sort('datacadastro'); ?></th>
			<!--<th class="actions"><?php echo __('Actions'); ?></th>-->
	</tr>
	</thead>
	<tbody>
	<?php foreach ($groupStudents as $groupStudent): ?>
	<tr>
		<td>
                    <?php echo $this->Html->link($groupStudent['Student']['nome'], array('controller' => 'students', 'action' => 'view', $groupStudent['Student']['id'])); ?>	
		</td>
		<td>
                    <?php echo $this->Html->link($groupStudent['Group']['nome'], array('controller' => 'groups', 'action' => 'view', $groupStudent['Group']['id'])); ?>
		</td>
		<td><?php echo h($groupStudent['GroupStudent']['datacadastro']); ?>&nbsp;</td>
		<!--<td class="actions">-->
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $groupStudent['GroupStudent']['id']), array(), __('Deseja deletar Estudante # %s?', $groupStudent['Student']['nome'])); ?>
		<!--</td>-->
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
