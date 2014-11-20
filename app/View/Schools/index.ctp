<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Escolas </h3>                    
                </div>
        </div>
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
                                            <th><?php echo $this->Paginator->sort('nome','Nome'); ?></th>
                                            <th><?php echo $this->Paginator->sort('zona','Zona'); ?></th>
                                            <th><?php echo $this->Paginator->sort('telefone','Telefone'); ?></th>
                                            <th class="actions"><?php echo __('Actions'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($schools as $school): ?>
                                            <tr class="odd gradeX">
                                                    <td><?php echo h($school['School']['nome']); ?>&nbsp;</td>
                                                    <td><?php echo h($school['School']['zona']); ?>&nbsp;</td>
                                                    <td><?php echo h($school['School']['telefone']); ?>&nbsp;</td>

                                                    <td lass="center">
                                                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $school['School']['id'])); ?>
                                                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $school['School']['id'])); ?>
                                                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $school['School']['id']), array(), __('Deseja deletar # %s?', $school['School']['nome'])); ?>
                                                            <?php echo $this->Html->link(__('PDF'), array('action' => 'view_pdf', 'ext' => 'pdf', $school['School']['id']),  array('target' => '_blank'));?>
                                                    </td>
                                            </tr>
                                    <?php endforeach; ?>
                                        
                                         </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
