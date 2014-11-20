
<h2><?php echo __('Notas'); ?></h2>

<?php
echo $this->Form->create('Bill');
?>

    <div class="row">
        <fieldset>
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Informações Gerais
                </div>
                <div class="panel-body">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <dt><?php echo __('Data da avaliação'); ?></dt>
                            <dd>
                                <?php echo $this->Form->input('dataavaliacao', array('label' => false)); ?>
                                &nbsp;
                            </dd>
                        </div>
                    </div>
                    <div class="col-lg-8">  
                        <div class="form-group">
                            <?php echo $this->Form->input('descricao', array('type' => 'textarea', 'label' => 'Descrição', 'class' => 'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <INPUT TYPE="hidden" NAME="data[Bill][discipline_group_id]" VALUE="<?php echo key($disciplineGroups);?>">

        <div class="col-lg-12"> 

            <div class="panel panel-default">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <?php echo __('Lista de Alunos'); ?>    
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <?php
                            if (!empty($billStudents)):
                                $i = 0;
                                ?>
                                <tr>
                                    <th><?php echo __('ALunos'); ?></th>		
                                    <th><?php echo __('Notas'); ?></th>		
                                </tr> 
                                <?php foreach ($billStudents as $billStudent): ?>
                                    <tr>    
                                        <td><?php echo $billStudents[$i]['Students']['nome'] ?> </td>	
                                                       <td><?php echo $this->Form->input('BillStudent.'.$i.'.nota', array('label'=>false, 'onkeypress'=>'return SomenteNumeroVirgula(event)')); ?></td>
                                                        <INPUT TYPE="hidden" NAME="data[BillStudent][<?php echo $i;?>][discipline_student_id]" VALUE="<?php echo $billStudent['DisciplineStudent']['id'];?>">
                                    </tr>
                                    <?php $i++;
                                endforeach; ?>
                            <?php endif; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</fieldset>
<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
<?php echo $this->Form->end(); ?>
</div>
