
<h2><?php echo __('Disciplina'); ?></h2>

<?php echo $this->Form->create('DisciplineGroup'); ?>
<fieldset>
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
                <select name="data[DisciplineGroup][discipline_id]"> 
                    <option  value="" > </option>
                    <?php while ($discipline = current($disciplines)) { ?>
                    
                        <?php
                        $groupexiste =false;
                        while($disciplineGroup1 = current($disciplineGroups)){
                            if(key($disciplines) == $disciplineGroup1){
                                $groupexiste =true;
                            }
                            next($disciplineGroups);
                        }
                        reset($disciplineGroups);
                             if($groupexiste){ ?>
                                <option disabled value="<?php echo key($disciplines);?>" ><?php echo $discipline; ?> </option>
                        <?php }else{?>
                                <option selected value="<?php echo key($disciplines);?>" ><?php echo $discipline; ?> </option>
                        <?php }?>

                    
                    <?php  next($disciplines);} ?>
                    </select>
                            &nbsp;
                        </dd>
                    </div>
                </div>
                
            </div>          
        </div>
    </div>
 </div>
<INPUT TYPE="hidden" NAME="data[DisciplineGroup][group_id]" VALUE="<?php echo $idgroup;?>">
</fieldset>
<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
<?php echo $this->Form->end(); ?>
