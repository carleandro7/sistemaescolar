<h2><?php echo __('Courses'); ?></h2>

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
                                <th><?php echo $this->Paginator->sort('municipio'); ?></th>
                                <th><?php echo $this->Paginator->sort('formaparticipacao'); ?></th>
                                <th><?php echo $this->Paginator->sort('natureza'); ?></th>
                                <th><?php echo $this->Paginator->sort('tipoofertacurso'); ?></th>
                                <th><?php echo $this->Paginator->sort('tipoofertadisciplina'); ?></th>
                                <!--<th><?php echo $this->Paginator->sort('perfilprofissional'); ?></th>-->
                                <th><?php echo $this->Paginator->sort('campusatuacao'); ?></th>
                                <th><?php echo $this->Paginator->sort('school_id'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($courses as $course): ?>
                                <tr>
                                        <!--<td><?php echo h($course['Course']['id']); ?>&nbsp;</td>-->
                                    <td><?php echo h($course['Course']['nome']); ?>&nbsp;</td>
                                    <td><?php echo h($course['Course']['municipio']); ?>&nbsp;</td>
                                    <td><?php echo h($course['Course']['formaparticipacao']); ?>&nbsp;</td>
                                    <td><?php echo h($course['Course']['natureza']); ?>&nbsp;</td>
                                    <td><?php echo h($course['Course']['tipoofertacurso']); ?>&nbsp;</td>
                                    <td><?php echo h($course['Course']['tipoofertadisciplina']); ?>&nbsp;</td>
                                    <!--<td><?php echo h($course['Course']['perfilprofissional']); ?>&nbsp;</td>-->
                                    <td><?php echo h($course['Course']['campusatuacao']); ?>&nbsp;</td>
                                    <td>
                                        <?php echo $this->Html->link($course['School']['nome'], array('controller' => 'schools', 'action' => 'view', $course['School']['id'])); ?>
                                    </td>
                                    <td class="actions">
                                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $course['Course']['id'])); ?>
                                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $course['Course']['id'])); ?>
                                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $course['Course']['id']), array(), __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?>
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

<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Course'), array('action' => 'add')); ?></li>
    </ul>
</div>
