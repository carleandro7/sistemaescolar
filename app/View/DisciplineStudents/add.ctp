
<h2><?php echo __('Matricular Aluno em Disciplina'); ?></h2>

<?php echo $this->Form->create('DisciplineStudent'); ?>
<fieldset>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Informações para matricula
            </div>

            <div class="panel-body">
                <div class="col-lg-4">
                    <div class="form-group">
                        <dt><?php echo __('Disciplina'); ?></dt>
                        <dd>
                            <select name="data[DisciplineStudent][discipline_groups_id]" class = "form-control"> 
                                <?php foreach ($disciplineGroups as $disciplineGroup): ?>
                                    <tr>
                                        <option  value="<?php echo $disciplineGroup['DisciplineGroups']['id']; ?>" ><?php echo $disciplineGroup['Disciplines']['nome']; ?> </option>
                                    </tr>
                                        <?php endforeach;     ?>
                            </select>      
                            &nbsp;
                        </dd>
                    </div>
                </div>
                <div class="col-lg-4">    
                    <div class="form-group">
                            <?php echo $this->Form->input('students_id',array('label' => 'Nome do Aluno', 'class' => 'form-control')); ?>
                    </div>
                </div>
                
            </div>          
        </div>
    </div>
 </div>
<INPUT TYPE="hidden" NAME="data[DisciplineStudent][status]" VALUE="ATIVO">
</fieldset>
<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
<?php echo $this->Form->end(); ?>
