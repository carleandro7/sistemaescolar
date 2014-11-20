<h2><?php echo __('Matriculas em disciplinas'); ?></h2>

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
                                <th><?php echo $this->Paginator->sort('DisciplineStudent.nomeDisciplina', 'Disciplina'); ?></th>
                                <th><?php echo $this->Paginator->sort('Students.nome', 'Estudante'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($disciplineStudents as $disciplineStudent): ?>
                                    <tr>
                                            <td>
                                                    <?php echo $this->Html->link($disciplineStudent['DisciplineStudent']['nomeDisciplina'], array('controller' => 'discipline_groups', 'action' => 'view', $disciplineStudent['DisciplineGroups']['id'])); ?>
                                            </td>
                                            <td>
                                                    <?php echo $this->Html->link($disciplineStudent['Students']['nome'], array('controller' => 'students', 'action' => 'view', $disciplineStudent['Students']['id'])); ?>
                                            </td>
                                            <td class="actions">
                                                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $disciplineStudent['DisciplineStudent']['id'])); ?>
                                                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $disciplineStudent['DisciplineStudent']['id']), array(), __('Deseja deletar # %s da disciplina %s?', $disciplineStudent['Students']['nome'],$disciplineStudent['DisciplineStudent']['nomeDisciplina'])); ?>
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

