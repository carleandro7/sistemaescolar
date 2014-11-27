<?php if($disciplinas!= null):?>
<h2><?php echo __('Aluno: '.$disciplinas[0]['Students']['nome']); ?></h2>
<h2><?php echo __('Turma: '.$disciplinas[0]['Groups']['nome']); ?></h2>
<?php echo $this->Html->link(__('Historico'), array('controller' => 'BillStudents','action' => 'view_turma_pdf','ext' => 'pdf', $disciplinas[0]['Students']['id'],$disciplinas[0]['Groups']['id'])); ?>          
<?php endif;?>
<?php if($disciplinas== null):?>
<h2><?php echo __('Aluno não tem nenhuma disciplina cadastrada nessa turma.'); ?></h2>
<?php endif;?>
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
                                
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($disciplinas as $disciplina): ?>
                                <tr>
                                    <td><?php echo h($disciplina['DisciplineStudent']['nomeDisciplina']); ?>&nbsp;</td>                               
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

