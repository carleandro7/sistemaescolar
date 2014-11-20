
<h2><?php echo __('Disciplina'); ?></h2>

<?php echo $this->Form->create('Discipline Group'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Informações da Disciplina
            </div>

            <div class="panel-body">
                <div class="col-lg-4">
                    <div class="form-group">
                        <dt><?php echo __('Professor'); ?></dt>
                        <dd>
                            <?php echo $this->Html->link($disciplineGroup['Teacher']['nome'], array('controller' => 'teachers', 'action' => 'view', $disciplineGroup['Teacher']['id'])); ?>
                            &nbsp;
                        </dd>
                    </div>
                </div>
                <div class="col-lg-4">    
                    <div class="form-group">
                        <dt><?php echo __('Disciplina'); ?></dt>
                        <dd>
                            <?php echo $this->Html->link($disciplineGroup['Discipline']['nome'], array('controller' => 'disciplines', 'action' => 'view', $disciplineGroup['Discipline']['id'])); ?>
                            &nbsp;
                        </dd>
                    </div>
                </div>
                <div class="col-lg-4">    
                    <div class="form-group">
                        <dt><?php echo __('Turma'); ?></dt>
                        <dd>
                            <?php echo $this->Html->link($disciplineGroup['Group']['nome'], array('controller' => 'groups', 'action' => 'view', $disciplineGroup['Group']['id'])); ?>
                            &nbsp;
                        </dd>
                    </div>
                </div>
            </div>          
        </div>
    </div>

    <div class="col-lg-12"> 

        <div class="panel panel-default">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?php echo __('Relação de Horarios'); ?>    
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                        <?php if (!empty($schedules)): ?>
                            <tr>
                                <th><?php echo __('Dia'); ?></th>
                                <th><?php echo __('Inicio'); ?></th>
                                <th><?php echo __('Fim'); ?></th>


                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                            <?php foreach ($schedules as $schedule): ?>
                                <tr>
                                    <td> <?php echo $schedule['Schedules']['dia']; ?></td>
                                    <td> <?php echo $schedule['Schedules']['inicio']; ?></td>
                                    <td>   <?php echo $schedule['Schedules']['fim']; ?></td>
                                    <td class="actions">

                                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'Schedules', 'action' => 'edit', $schedule['Schedules']['id'], $disciplineGroup['DisciplineGroup']['id'])); ?>
                                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Schedules', 'action' => 'delete', $schedule['Schedules']['id'], $disciplineGroup['DisciplineGroup']['id']), array(), __('Deseja deletar horario # %s?', $schedule['Schedules']['dia'])); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                    </table>
                    <?php echo $this->Html->link(__('New Horario'), array('controller' => 'Schedules', 'action' => 'add', $disciplineGroup['DisciplineGroup']['id'])); ?>
                </div>
            </div>
        </div>
    </div>
</div><?php echo $this->Form->end(); ?>