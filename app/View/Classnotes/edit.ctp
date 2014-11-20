
<h2><?php echo __('Editar Aula'); ?></h2>

<?php
echo $this->Form->create('Classnote');
echo $this->Form->input('id');
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
                            <dt><?php echo __('Data da aula'); ?></dt>
                            <dd>
                                <?php echo $this->Form->input('dataaula', array('label' => false)); ?>
                                &nbsp;
                            </dd>
                        </div>
                    </div>
                    <div class="col-lg-4">  
                        <div class="form-group">
                            <?php echo $this->Form->input('qtdaula', array('label' => 'Quantidade de aula', 'class' => 'form-control','onkeypress' => 'return SomenteNumero(event)')); ?>
                        </div>
                    </div>
                    <div class="col-lg-12">  
                        <div class="form-group">
                            <?php echo $this->Form->input('assunto', array('type' => 'textarea', 'label' => 'Assunto', 'class' => 'form-control')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <INPUT TYPE="hidden" NAME="data[Classnote][discipline_group_id]" VALUE="<?php echo $this->request->data['Classnote']['discipline_group_id']; ?>">

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
                            if (!empty($frequencys)):
                                $num_rows = sizeof($frequencys);
                                ?>
                                <tr>
                                    <th><?php echo __('Alunos'); ?></th>		
                                    <th><?php echo __('Frequência'); ?></th>		
                                </tr> 
                                <?php for ($i = 0; $i < $num_rows; $i++) {
                                    $frequency = $frequencys[$i];
                                    ?>
                                    <tr>    
                                        <td><?php echo $frequency['Students']['nome'] ?></td>	
                                        <td><?php echo $this->Form->input('Frequency.' . $i . '.falta', array('label' => false, 'onkeypress' => 'return SomenteNumero(event)')); ?> </td>	
                                        <INPUT TYPE="hidden" NAME="data[Frequency][<?php echo $i; ?>][discipline_student_id]" VALUE="<?php echo $frequency['DisciplineStudent']['id']; ?>">
                                        <INPUT TYPE="hidden" NAME="data[Frequency][<?php echo $i; ?>][id]" VALUE="<?php echo $frequency['Frequency']['id']; ?>">
                                    </tr>
                                <?php } ?>
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
