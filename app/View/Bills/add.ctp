<div class="bills form">
<?php echo $this->Form->create('Bill'); ?>
	<fieldset>
		<legend><?php echo __('Add Bill'); ?></legend>
	<?php
		echo $this->Form->input('dataavaliacao');
		echo $this->Form->input('descricao');
		            
      	?>
                <INPUT TYPE="hidden" NAME="data[Bill][discipline_group_id]" VALUE="<?php echo key($disciplineGroups);?>">
       <?php 
        if (!empty($billStudents)): 
             $num_rows =  sizeof($billStudents);
        ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ALunos'); ?></th>		
		<th <?php echo __('Notas'); ?></th>
	</tr> 
	<?php   for($i=0; $i<$num_rows; $i++){
              $billstudent=$billStudents[$i];?>
		<tr>    
                        <td><?php echo $billstudent['Students']['nome'].' '.$i;?></td>	
                        <td><?php echo $this->Form->input('BillStudent.'.$i.'.nota', array('label'=>false));?></td>	
                        <td><INPUT TYPE="hidden" NAME="data[BillStudent][<?php echo $i;?>][discipline_student_id]" VALUE="<?php echo $billstudent['DisciplineStudent']['id'];?>">
                         
		
		</tr>
	<?php }?>
	</table>
        <?php endif; ?>
         
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

