
<h2><?php echo __('Matricular Aluno em Disciplina'); ?></h2>

<?php echo $this->Form->create('DisciplineStudent'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Informações para matricula
            </div>

            <div class="panel-body">
                <div class="col-lg-4">
                    <div class="form-group">
                            <?php echo $this->Form->input('data[Student][nome]',array('label' => 'Nome do Aluno', 'class' => 'form-control', 'readonly' => true, 'value' => $disciplineStudent['Students']['nome'])); ?>
                    </div>
                </div>
                <div class="col-lg-4">    
                    <div class="form-group">
                            <?php echo $this->Form->input('data[DisciplineStudent][discipline_groups_id]',array('label' => 'Nome do Disciplina', 'class' => 'form-control', 'readonly' => true, 'value' => $disciplineStudent['DisciplineStudent']['nomeDisciplina'])); ?>
                    </div>
                </div>
                <div class="col-lg-4">    
                    <div class="form-group">
                            <?php echo $this->Form->input('status',array('label' => 'Status', 'class' => 'form-control', 'readonly' => true, 'value' => $disciplineStudent['DisciplineStudent']['status'])); ?>
                    </div>
                </div>
                
            </div>          
        </div>
    </div>
 </div>

<?php echo $this->Form->end(); ?>
