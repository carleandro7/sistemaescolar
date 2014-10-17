<div class="disciplineGroups form">
<?php echo $this->Form->create('DisciplineGroup'); ?>
	<fieldset>
		<legend><?php echo __('Edit Discipline Group'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo 'Disciplina: '.$dadosDisciplineGroups['Discipline']['nome'].'<br>';		            
                echo 'Grupo: '.$dadosDisciplineGroups['Group']['nome'].'<br>';
        ?>
                <select name="data[DisciplineGroup][teacher_id]"> 
                     <option  value="" > </option>
                <?php $idteachers = $dadosDisciplineGroups['Teacher']['id']; 
                        while ($teacher = current($teachers)) { ?>
		<tr>
                    <?php if(!empty($idteachers) && key($teachers) == $idteachers){ ?>
                            <option selected value="<?php echo key($teachers);?>" ><?php echo $teacher; ?> </option>
                    <?php }else{?>
                        <option  value="<?php echo key($teachers);?>" ><?php echo $teacher; ?> </option>
                    <?php }?>
                    
		</tr>
                <?php  next($teachers);} ?>
                </select>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
