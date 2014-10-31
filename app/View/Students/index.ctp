
<h2><?php echo __('Aluno'); ?></h2>

<!--<div class="row">
    <div class="col-lg-12">
        <div class="panel-body">
                <div class="col-lg-3">

            <a class="btn btn-outline btn-primary" href="Students/add" rel="address"><span>
                    <img src="img/icons/file_add.png"><br>
                    <br>
                    Adicionar Aluno
                </span></a>
                </div>
        </div>
    </div>
</div>-->

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
                                <!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
                                <th><?php echo $this->Paginator->sort('nome'); ?></th>
                                <th><?php echo $this->Paginator->sort('fone'); ?></th>
                                <th><?php echo $this->Paginator->sort('school_id'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($students as $student): ?>
                                <tr>
                                    <td><?php echo h($student['Student']['nome']); ?>&nbsp;</td>                               
                                    <td><?php echo h($student['Student']['fone']); ?>&nbsp;</td>
                                    <td>
                                        <?php echo $this->Html->link($student['School']['nome'], array('controller' => 'schools', 'action' => 'view', $student['School']['id'])); ?>
                                    </td>
                                    <td class="actions">
                                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $student['Student']['id'])); ?>
                                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $student['Student']['id'])); ?>
                                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $student['Student']['id']), array(), __('VocÃª deseja realmente excluir %s?', $student['Student']['nome'])); ?>
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

