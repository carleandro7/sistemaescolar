<div class="disciplineGroups form">
<?php echo $this->Form->create('DisciplineGroup'); ?>
	<fieldset>
		<legend><?php echo __('Add Discipline Group'); ?></legend>
	<?php
		echo $this->Form->input('teacher_id');
	?>
                <select name="data[DisciplineGroup][discipline_id]"> 
                    <option  value="" > </option>
                <?php while ($discipline = current($disciplines)) { ?>
		<tr>
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
                    
		</tr>
                <?php  next($disciplines);} ?>
                </select>
 
                
                <INPUT TYPE="hidden" NAME="data[DisciplineGroup][group_id]" VALUE="<?php echo $idgroup;?>">
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

