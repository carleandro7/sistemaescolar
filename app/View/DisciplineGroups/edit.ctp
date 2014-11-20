
<h2><?php echo __('Disciplina'); ?></h2>

<?php
echo $this->Form->create('DisciplineGroup');
echo $this->Form->input('id');
?>

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
                            <select name="data[DisciplineGroup][teacher_id]"> 
                                <option  value="" > </option>
                                <?php
                                $idteachers = $dadosDisciplineGroups['Teacher']['id'];
                                while ($teacher = current($teachers)) {
                                    ?>
                                    <tr>
                                    <?php if (!empty($idteachers) && key($teachers) == $idteachers) { ?>
                                        <option selected value="<?php echo key($teachers); ?>" ><?php echo $teacher; ?> </option>
                                    <?php } else { ?>
                                        <option  value="<?php echo key($teachers); ?>" ><?php echo $teacher; ?> </option>
                                    <?php } ?>

                                    </tr>
                                        <?php next($teachers);
                                    }
                                    ?>
                            </select>      
                            &nbsp;
                        </dd>
                    </div>
                </div>
                <div class="col-lg-4">    
                    <div class="form-group">
                        <dt><?php echo __('Disciplina'); ?></dt>
                        <dd>
<?php echo $this->Html->link($dadosDisciplineGroups['Discipline']['nome'], array('controller' => 'disciplines', 'action' => 'view', $dadosDisciplineGroups['Discipline']['id'])); ?>
                            &nbsp;
                        </dd>
                    </div>
                </div>
                <div class="col-lg-4">    
                    <div class="form-group">
                        <dt><?php echo __('Turma'); ?></dt>
                        <dd>
<?php echo $this->Html->link($dadosDisciplineGroups['Group']['nome'], array('controller' => 'groups', 'action' => 'view', $dadosDisciplineGroups['Group']['id'])); ?>
                            &nbsp;
                        </dd>
                    </div>
                </div>
            </div>          
        </div>
    </div>
 </div>
<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
<?php echo $this->Form->end(); ?>