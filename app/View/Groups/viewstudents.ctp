
<h2><?php echo __('Turma - Estudantes'); ?></h2>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Informações da Turma
            </div>

            <div class="panel-body">
                <div class="col-lg-12">
                    <div class="form-group">
                        <?php echo $this->Form->input('nome', array('label' => 'Nome da Turma', 'class' => 'form-control', 'readonly' => true, 'value' => $group['Group']['nome'])); ?>
                    </div>
                </div>

                <div class="col-lg-4">  
                    <div class="form-group">
                        <?php echo $this->Form->input('ano', array('label' => 'Ano', 'class' => 'form-control', 'onkeypress' => 'return SomenteNumero(event)', 'readonly' => true, 'value' => $group['Group']['ano'])); ?>
                    </div>
                </div>

                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('nivel', array('label' => 'Nivel', 'class' => 'form-control', 'options' => array('Infantil' => 'Infantil', 'Fundamental' => 'Fundamental', 'Médio' => 'Médio', 'Técnico' => 'Técnico', 'Superior' => 'Superior', 'Pós-Graduação' => 'Pós-Graduação'), 'readonly' => true, 'value' => $group['Group']['nivel'])); ?>
                    </div>
                </div>

                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('local', array('label' => 'Local', 'class' => 'form-control', 'readonly' => true, 'value' => $group['Group']['local'])); ?>
                    </div>
                </div>

                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('capacidade', array('label' => 'Capacidade', 'class' => 'form-control', 'onkeypress' => 'return SomenteNumero(event)', 'readonly' => true, 'value' => $group['Group']['capacidade'])); ?>
                    </div>
                </div>

                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('status', array('label' => 'Status', 'class' => 'form-control', 'options' => array('Ativo' => 'Ativo', 'Inativo' => 'Inativo'), 'readonly' => true, 'value' => $group['Group']['status'])); ?>
                    </div>
                </div>

                <div class="col-lg-4">    
                    <div class="form-group">
                        <dt><?php echo __('Curso'); ?></dt>
                        <dd>
                            <b><?php echo $group['Course']['nome']; ?></b>
                            &nbsp;
                        </dd>
                    </div>
                </div>

                <?php echo $this->Form->input('id'); ?>

            </div>          
        </div>
    </div>
    <div class="col-lg-12"> 

        <div class="panel panel-default">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?php echo __('Relação de Estudantes'); ?>    
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                        <?php if (!empty($groupStudents)): ?>
                            <tr>
                                <th><?php echo __('Estudantes'); ?></th>

                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                            <?php foreach ($groupStudents as $groupStudent): ?>
                                <tr>
                                    <td><?php echo $this->Html->link($groupStudent['Student']['nome'], array('controller' => 'Students', 'action' => 'view', $groupStudent['Student']['id'])); ?></td>


                                    <td class="actions">
                                        <?php echo $this->Html->link(__('View'), array('controller' => 'Students', 'action' => 'view', $groupStudent['Student']['id'])); ?>
                                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'GroupStudents', 'action' => 'delete', $groupStudent['GroupStudent']['id'], $group['Group']['id'], $groupStudent['Student']['id']), array(), __('Deseja deletar Matricula de aluno# %s?', $groupStudent['Student']['nome'])); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </table>
                    <?php echo $this->Html->link(__('Adicionar Estudante'), array('controller' => 'groupStudents', 'action' => 'add', $group['Group']['id'])); ?>
                </div>
            </div>
        </div>
    </div>
