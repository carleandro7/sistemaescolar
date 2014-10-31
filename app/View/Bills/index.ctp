
	<h2><?php echo __('Notas'); ?></h2>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $this->Html->link(__('Adicionar'), array('action' => 'add', $id)); ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                                    <th><?php echo $this->Paginator->sort('dataavaliacao', 'Data da avaliação'); ?></th>
                                                    <th><?php echo $this->Paginator->sort('descricao','Descrição'); ?></th>
                                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($bills as $bill): ?>
                                    <tr>
                                            <td><?php echo h($bill['Bill']['dataavaliacao']); ?>&nbsp;</td>
                                            <td><?php echo h($bill['Bill']['descricao']); ?>&nbsp;</td>

                                            <td class="actions">
                                                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $bill['Bill']['id'])); ?>
                                                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bill['Bill']['id'])); ?>
                                                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bill['Bill']['id'],$bills[0]['Bill']['discipline_group_id']), array(), __('Are you sure you want to delete # %s?', $bill['Bill']['id'])); ?>
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
