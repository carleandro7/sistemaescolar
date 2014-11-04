<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which; 
    if((tecla>47 && tecla<58) || tecla === 44) return true;
    else{
    	if (tecla===8 || tecla===0 ) return true;
	else  return false;
    }
}
</script> 
<div class="bills form">
<?php echo $this->Form->create('Bill'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bill'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dataavaliacao');
		echo $this->Form->input('descricao');
                
                
	?>
	<INPUT TYPE="hidden" NAME="data[Bill][discipline_group_id]" VALUE="<?php echo $this->request->data['Bill']['discipline_group_id'];?>">
    <?php 
        if (!empty($billStudents)): 
             $i=0;
        ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ALunos'); ?></th>		
		<th <?php echo __('Notas'); ?></th>
                <th <?php echo __('Notas'); ?></th>
	</tr> 
	<?php   foreach ($billStudents as $billStudent): ?>
		<tr>    
                        <td><?php echo $billStudents[$i]['Students']['nome']?> </td>	
                        <td><?php echo $this->Form->input('BillStudent.'.$i.'.nota', array('label'=>false, 'onkeypress'=>'return SomenteNumero(event)',  'VALUE'=>$billStudents[$i]['BillStudent']['nota'])); ?> </td>	
                        <td><INPUT TYPE="hidden" NAME="data[BillStudent][<?php echo $i;?>][discipline_student_id]" VALUE="<?php echo $billStudent['DisciplineStudent']['id'];?>"></td>
                        <td><INPUT TYPE="hidden" NAME="data[BillStudent][<?php echo $i;?>][id]" VALUE="<?php echo $billStudent['BillStudent']['id'];?>"></td>
		</tr>
    <?php $i++; endforeach; ?>
	</table>
        <?php endif; ?>
         
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
