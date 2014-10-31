	<h2><?php echo __('Turmas'); ?></h2>
	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $this->Html->link(__('Adicionar'), array('action' => 'add')); ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                             
        
	<thead>
	<tr>
			<!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('ano'); ?></th>
			<th><?php echo $this->Paginator->sort('nivel'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('course_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($groups as $group): ?>
	<tr>
		<!--<td><?php echo h($group['Group']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($group['Group']['nome']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['ano']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['nivel']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($group['Course']['nome'], array('controller' => 'courses', 'action' => 'view', $group['Course']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View Discipline'), array('action' => 'view', $group['Group']['id'])); ?>
                        <?php echo $this->Html->link(__('View Students'), array('action' => 'viewstudents', $group['Group']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), array(), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
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
