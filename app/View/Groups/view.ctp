
<h2><?php echo __('Turma'); ?></h2>
	

                    
                 
<div class="col-lg-4"> 
    <div class="well well-lg">
        
<dl>
		<!--<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($group['Group']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano'); ?></dt>
		<dd>
			<?php echo h($group['Group']['ano']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nivel'); ?></dt>
		<dd>
			<?php echo h($group['Group']['nivel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Local'); ?></dt>
		<dd>
			<?php echo h($group['Group']['local']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capacidade'); ?></dt>
		<dd>
			<?php echo h($group['Group']['capacidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($group['Group']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($group['Course']['nome'], array('controller' => 'courses', 'action' => 'view', $group['Course']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
    </div>

<div class="col-lg-8"> 

	<h2><?php echo __('Relação de disciplinas'); ?></h2>
                <div class="panel panel-default">
                        <div class="panel-heading">
                        <?php echo $this->Html->link(__('New Discipline Group'), array('controller' => 'disciplinegroups', 'action' => 'addgroup', $group['Course']['id'], $group['Group']['id'])); ?>    
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
       
	<?php 
        if (!empty($disciplineGroups)): ?>
	<tr>
		<th><?php echo __('Disciplinas'); ?></th>
		
		
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($disciplineGroups as $disciplineGroup): ?>
		<tr>
                        <td><?php echo $this->Html->link($disciplineGroup['Discipline']['nome'], array('controller' => 'Disciplines', 'action' => 'view', $disciplineGroup['Discipline']['id'])); ?></td>
			
			
			<td class="actions">
                                <?php echo $this->Html->link(__('Notas'), array('controller' => 'Bills', 'action' => 'index', $disciplineGroup['DisciplineGroup']['id'])); ?>
                                <?php echo $this->Html->link(__('Frequencia'), array('controller' => 'Classnotes', 'action' => 'index', $disciplineGroup['DisciplineGroup']['id'])); ?>
                            	<?php echo $this->Html->link(__('Professor'), array('controller' => 'DisciplineGroups', 'action' => 'edit', $disciplineGroup['DisciplineGroup']['id'], $group['Group']['id'])); ?>
				<?php echo $this->Html->link(__('View'), array('controller' => 'DisciplineGroups', 'action' => 'view', $disciplineGroup['DisciplineGroup']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'DisciplineGroups', 'action' => 'delete', $disciplineGroup['DisciplineGroup']['id']), array(), __('Are you sure you want to delete # %s?', $disciplineGroup['Discipline']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                <?php endif; ?>
	</table>
                            </div>
                        </div>
                </div>
</div>
                                
 </div>       
        
        



