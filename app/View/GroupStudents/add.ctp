<h2><?php echo __('Adicionar GroupStudent'); ?></h2>
<?php echo $this->Form->create('GroupStudent');?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Contato
            </div>
            <div class="panel-body">
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('student_id', array('label' => 'Aluno', 'class' => 'form-control')); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('datacadastro', array('label' => 'Data de Cadastro', 'class' => 'form-control')); ?>
                        
                    </div>
                </div>
                <?php echo $groups[key($groups)]; ?>

            </div>
        </div>
    </div>
</div>

    
<INPUT TYPE="hidden" NAME="data[GroupStudent][group_id]" VALUE="<?php echo key($groups);?>">

<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
<?php echo $this->Form->end(); ?>


