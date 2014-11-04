<h2><?php echo __('Aluno '.$student[0]['Student']['nome']); ?></h2>                    
<h2><?php echo __('Turma '.$discipline[0]['Group']['nome']); ?></h2>                    
<div class="col-lg-4"> 
    <div class="well well-lg">        
        <dl>
		<dt><?php echo __('Disciplina'); ?></dt>
		<dd>
			<?php echo h($discipline[0]['Discipline']['nome']); ?>
			&nbsp;
                </dd>
                <dt><?php echo __('Media'); ?></dt>
		<dd>
			<?php echo h($mediapoderada[0][0]['AVG(`BillStudent`.`nota`)']); ?>
			&nbsp;
                </dd>
	</dl>
</div>
    </div>

<div class="col-lg-8"> 

	
                <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
       
	
	<tr>
		<th><?php echo __('Notas'); ?></th>
	</tr>
        <?php 
        if (!empty($billStudents)): ?>
	<?php foreach ($billStudents as $billStudent): ?>
		<tr>
                        <td><?php echo $billStudent['BillStudent']['nota']; ?></td>
		</tr>
	<?php endforeach; ?>
                <?php endif; ?>
	</table>
                            </div>
                        </div>
                </div>
</div>
                                
 </div>       
        
        



