<h2><?php 
    if ($disciplinas !=null){
        echo ('Aluno: '.$disciplinas[0]['Students']['nome'] ); 
    }else{
        echo ('Aluno não possui nenhuma disciplina cadastrado'); 
    }
 ?></h2>

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
                                
                                <th><?php echo $this->Paginator->sort('Disciplina'); ?></th>
                                <th><?php echo $this->Paginator->sort('Turma'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($disciplinas as $disciplina): ?>
                                <tr>
                                    <td><?php echo h($disciplina['DisciplineStudent']['nomeDisciplina']); ?>&nbsp;</td>                               
                                    <td><?php echo h($disciplina['Groups']['nome']); ?>&nbsp;</td>
                                    <td class="actions">
                                        <?php echo $this->Html->link(__('View'), array('controller' => 'BillStudents','action' => 'viewnotas', $disciplina['DisciplineStudent']['id'])); ?>
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

