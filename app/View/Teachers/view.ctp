<h2><?php echo __('Professor'); ?></h2>
<div class="teachers form">
    <?php echo $this->Form->create('Teacher'); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Informações Pessoais
                </div>

                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <?php echo $this->Form->input('nome', array('label' => 'Nome do Professor', 'class' => 'form-control', 'readonly' => true, 'value' => $teacher['Teacher']['nome'])); ?>
                        </div>
                    </div>

                    <div class="col-lg-4">    
                        <div class="form-group">
                            <?php echo $this->Form->input('titulacao', array('label' => 'Titulação', 'class' => 'form-control', 'options' => array('Licenciatura' => 'Licenciatura', 'Bacharel' => 'Bacharel', 'Pós-Graduação' => 'Pós-Graduação', 'Mestrado' => 'Mestrado', 'Doutorado', 'Doutorado'), 'readonly' => true, 'value' => $teacher['Teacher']['titulacao'])); ?>
                        </div>
                    </div>

                    <div class="col-lg-4">    
                        <div class="form-group">
                            <?php echo $this->Form->input('area', array('label' => 'Área', 'class' => 'form-control', 'readonly' => true, 'value' => $teacher['Teacher']['area'])); ?>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="col-lg-12"> 

        <div class="panel panel-default">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?php echo __('Relação de disciplinas'); ?>    
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                        <?php if (!empty($teacher['DisciplineGroup'])): ?>
                            <tr>
                                <th><?php echo __('Disciplina'); ?></th>
                                <th><?php echo __('Tumra'); ?></th>
                                <th><?php echo __('Ano'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                            <?php foreach ($disciplineGroups as $disciplineGroup): ?>
                                <tr>
                                    <td><?php echo $disciplineGroup['Discipline']['nome']; ?></td>
                                    <td><?php echo $disciplineGroup['Group']['nome']; ?></td>
                                    <td><?php echo $disciplineGroup['Group']['ano']; ?></td>
                                    <td class="actions">
                                        <?php echo $this->Html->link(__('View'), array('controller' => 'discipline_groups', 'action' => 'view', $disciplineGroup['DisciplineGroup']['id'])); ?>
                                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'discipline_groups', 'action' => 'edit', $disciplineGroup['DisciplineGroup']['id'])); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>       



<?php echo $this->Form->end(); ?>

