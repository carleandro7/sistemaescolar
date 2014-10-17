<h2><?php echo __('Teachers'); ?></h2>



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
                                <th><?php echo $this->Paginator->sort('imagem'); ?></th>
                                <th><?php echo $this->Paginator->sort('nome'); ?></th>
                                <th><?php echo $this->Paginator->sort('fone'); ?></th>
                                <th><?php echo $this->Paginator->sort('titulacao'); ?></th>
                                <th><?php echo $this->Paginator->sort('area'); ?></th>
                                <!--<th><?php echo $this->Paginator->sort('cep'); ?></th>-->
                                <!--<th><?php echo $this->Paginator->sort('logradouro'); ?></th>-->
                                <!--<th><?php echo $this->Paginator->sort('numero'); ?></th>-->
                                <!--<th><?php echo $this->Paginator->sort('bairro'); ?></th>-->
                                <th><?php echo $this->Paginator->sort('cidade'); ?></th>
                                <th><?php echo $this->Paginator->sort('estado'); ?></th>
                                <th><?php echo $this->Paginator->sort('email'); ?>
                                <!--<th><?php echo $this->Paginator->sort('username'); ?></th>-->
                                <!--<th><?php echo $this->Paginator->sort('password'); ?></th>-->
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($teachers as $teacher): ?>
                                <tr>
                                    <!--<td><?php echo h($teacher['Teacher']['id']); ?>&nbsp;</td>-->
                                    <td><?php echo h($teacher['Teacher']['imagem']); ?>&nbsp;</td>
                                    <td><?php echo h($teacher['Teacher']['nome']); ?>&nbsp;</td>
                                    <td><?php echo h($teacher['Teacher']['fone']); ?>&nbsp;</td>
                                    <td><?php echo h($teacher['Teacher']['titulacao']); ?>&nbsp;</td>
                                    <td><?php echo h($teacher['Teacher']['area']); ?>&nbsp;</td>
                                    <!--<td><?php echo h($teacher['Teacher']['cep']); ?>&nbsp;</td>-->
                                    <!--<td><?php echo h($teacher['Teacher']['logradouro']); ?>&nbsp;</td>-->
                                    <!--<td><?php echo h($teacher['Teacher']['numero']); ?>&nbsp;</td>-->
                                    <!--<td><?php echo h($teacher['Teacher']['bairro']); ?>&nbsp;</td>-->
                                    <td><?php echo h($teacher['Teacher']['cidade']); ?>&nbsp;</td>
                                    <td><?php echo h($teacher['Teacher']['estado']); ?>&nbsp;</td>
                                    <td><?php echo h($teacher['Teacher']['email']); ?>&nbsp;</td>
                                    <!--<td><?php echo h($teacher['Teacher']['username']); ?>&nbsp;</td>-->
                                    <!--<td><?php echo h($teacher['Teacher']['password']); ?>&nbsp;</td>-->
                                    <td class="actions">
                                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $teacher['Teacher']['id'])); ?>
                                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $teacher['Teacher']['id'])); ?>
                                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $teacher['Teacher']['id']), array(), __('Are you sure you want to delete # %s?', $teacher['Teacher']['id'])); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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
            <li><?php echo $this->Html->link(__('New Teacher'), array('action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('List Discipline Groups'), array('controller' => 'discipline_groups', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Discipline Group'), array('controller' => 'discipline_groups', 'action' => 'add')); ?> </li>
        </ul>
    </div>
