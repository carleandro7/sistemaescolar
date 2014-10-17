<h2><?php echo __('Disciplinas'); ?></h2>

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
                                <th><?php echo $this->Paginator->sort('chteorica'); ?></th>
                                <th><?php echo $this->Paginator->sort('chpratica'); ?></th>
                                <th><?php echo $this->Paginator->sort('cdtotal'); ?></th>
                                <th><?php echo $this->Paginator->sort('course_id'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($disciplines as $discipline): ?>
                                <tr>
                                    <!--<td><?php echo h($discipline['Discipline']['id']); ?>&nbsp;</td>-->
                                    <td><?php echo h($discipline['Discipline']['nome']); ?>&nbsp;</td>
                                    <td><?php echo h($discipline['Discipline']['chteorica']); ?>&nbsp;</td>
                                    <td><?php echo h($discipline['Discipline']['chpratica']); ?>&nbsp;</td>
                                    <td><?php echo h($discipline['Discipline']['cdtotal']); ?>&nbsp;</td>
                                    <td>
                                        <?php echo $this->Html->link($discipline['Course']['nome'], array('controller' => 'courses', 'action' => 'view', $discipline['Course']['id'])); ?>
                                    </td>
                                    <td class="actions">
                                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $discipline['Discipline']['id'])); ?>
                                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $discipline['Discipline']['id'])); ?>
                                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $discipline['Discipline']['id']), array(), __('Are you sure you want to delete # %s?', $discipline['Discipline']['id'])); ?>
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
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Discipline'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Discipline Groups'), array('controller' => 'discipline_groups', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Discipline Group'), array('controller' => 'discipline_groups', 'action' => 'add')); ?> </li>
    </ul>
</div>
