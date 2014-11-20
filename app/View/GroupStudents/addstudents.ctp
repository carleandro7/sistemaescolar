<h2><?php echo __('Matricular Aluno em Turma'); ?></h2>
<?php echo $this->Form->create('GroupStudent'); ?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Matricula
            </div>
            <div class="panel-body">
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('student_id', array('label' => 'Aluno', 'class' => 'form-control')); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <dt><?php echo __('Data de Cadastro'); ?></dt>
                        <dd>
                        <?php echo $this->Form->input('datacadastro', array('label' => false,'dateFormat' => 'DMY')); ?>
                        </dd>                       
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                <?php echo $this->Form->input('group_id', array('label' => 'Turmas', 'class' => 'form-control')); ?>
                </div>
            </div>
        </div>
    </div>
</div>

    


<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
<?php echo $this->Form->end(); ?>


