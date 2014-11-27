<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Usuários </h3>                    
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo 'Lista de Usuários'; ?>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>

                                <th><?php echo $this->Paginator->sort('nome'); ?></th>
                                <th><?php echo $this->Paginator->sort('fone'); ?></th>
                                <th><?php echo $this->Paginator->sort('school_id', 'Escolas'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>

                                    <td><?php echo h($user['User']['nome']); ?>&nbsp;</td>
                                    <td><?php echo h($user['User']['fone']); ?>&nbsp;</td>
                                    <td>
                                        <?php echo $this->Html->link($user['School']['nome'], array('controller' => 'schools', 'action' => 'view', $user['School']['id'])); ?>
                                    </td>
                                    <td class="actions">
                                        <?php echo $this->Html->link(__('View'), array('action' => 'view', criptografa($user['User']['id']))); ?>
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

