<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla===8 || tecla===0) return true;
	else  return false;
    }
}
</script>
<div class="classnotes form">
<?php echo $this->Form->create('Classnote'); ?>
	<fieldset>
		<legend><?php echo __('Add Classnote'); ?></legend>
	<?php
                echo $this->Form->input('assunto');		
                echo $this->Form->input('qtdaula');
                echo $this->Form->input('dataaula');
	?>
                <INPUT TYPE="hidden" NAME="data[Classnote][discipline_group_id]" VALUE="<?php echo key($disciplineGroups);?>">
        <?php 
                if (!empty($frequencys)): 
             $num_rows =  sizeof($frequencys);
        ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ALunos'); ?></th>		
		<th <?php echo __('Frequencia'); ?></th>
	</tr> 
	<?php   for($i=0; $i<$num_rows; $i++){
              $frequency=$frequencys[$i];?>
		<tr>    
                        <td><?php echo $frequency['Students']['nome'];?></td>	
                        <td><?php echo $this->Form->input('Frequency.'.$i.'.falta', array('label'=>false, 'onkeypress'=>'return SomenteNumero(event)')); ?> </td>	
                        <td><INPUT TYPE="hidden" NAME="data[Frequency][<?php echo $i;?>][discipline_student_id]" VALUE="<?php echo $frequency['DisciplineStudent']['id'];?>">
                         
		
		</tr>
	<?php }?>
	</table>
        <?php endif; ?>
         
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
