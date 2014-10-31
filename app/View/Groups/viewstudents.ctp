<div class="groupstudents index">
<h2><?php echo __('Group'); ?></h2>

<div class="col-lg-4">
    <div class="well well">
        <dl>
            <dt><?php echo __('Id'); ?></dt>
            <dd>
                <?php echo h($group['Group']['id']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Nome'); ?></dt>
            <dd>
                <?php echo h($group['Group']['nome']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Ano'); ?></dt>
            <dd>
                <?php echo h($group['Group']['ano']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Nivel'); ?></dt>
            <dd>
                <?php echo h($group['Group']['nivel']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Local'); ?></dt>
            <dd>
                <?php echo h($group['Group']['local']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Capacidade'); ?></dt>
            <dd>
                <?php echo h($group['Group']['capacidade']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Status'); ?></dt>
            <dd>
                <?php echo h($group['Group']['status']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Course'); ?></dt>
            <dd>
                <?php echo $this->Html->link($group['Course']['nome'], array('controller' => 'courses', 'action' => 'view', $group['Course']['id'])); ?>
                &nbsp;
            </dd>
        </dl>
    </div>

</div>
<div class="col-lg-8">
    <h3><?php echo __('Relação de Estudantes'); ?></h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo $this->Html->link(__('Adicionar Estudante'), array('controller' => 'groupstudents', 'action' => 'add', $group['Group']['id'])); ?>
        </div>
        <?php if (!empty($groupStudents)): ?>
           <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
             <tr>
                    <th><?php echo __('Estudantes'); ?></th>


                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
    <?php foreach ($groupStudents as $groupStudent): ?>
                    <tr>
                        <td><?php echo $this->Html->link($groupStudent['Student']['nome'], array('controller' => 'Students', 'action' => 'view', $groupStudent['Student']['id'])); ?></td>


                        <td class="actions">
        <?php echo $this->Html->link(__('View'), array('controller' => 'Students', 'action' => 'view', $groupStudent['Student']['id'])); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'GroupStudents', 'action' => 'delete', $groupStudent['GroupStudent']['id'], $group['Group']['id'], $groupStudent['Student']['id']), array(), __('Are you sure you want to delete Matricula# %s?', $groupStudent['Student']['nome'])); ?>
                        </td>
                    </tr>
    <?php endforeach; ?>
            </table>
                            </div>
           </div>
    </div>
</div>
            <?php endif; ?>


  
</div>