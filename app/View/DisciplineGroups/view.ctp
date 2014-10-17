<div class="disciplineGroups view">
<h2><?php echo __('Discipline Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($disciplineGroup['DisciplineGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teacher'); ?></dt>
		<dd>
			<?php echo $this->Html->link($disciplineGroup['Teacher']['nome'], array('controller' => 'teachers', 'action' => 'view', $disciplineGroup['Teacher']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discipline'); ?></dt>
		<dd>
			<?php echo $this->Html->link($disciplineGroup['Discipline']['nome'], array('controller' => 'disciplines', 'action' => 'view', $disciplineGroup['Discipline']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($disciplineGroup['Group']['nome'], array('controller' => 'groups', 'action' => 'view', $disciplineGroup['Group']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Relação de Horarios'); ?></h3>
        
	<?php 
        
        if (!empty($schedules)): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Dia'); ?></th>
                <th><?php echo __('Inicio'); ?></th>
		<th><?php echo __('Fim'); ?></th>
                
		
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($schedules as $schedule): ?>
		<tr>
                    <td> <?php echo $schedule['Schedules']['dia']; ?></td>
                    <td> <?php echo $schedule['Schedules']['inicio']; ?></td>
                    <td>   <?php echo $schedule['Schedules']['fim']; ?></td>
			
			
			<td class="actions">
				
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'Schedules', 'action' => 'edit', $schedule['Schedules']['id'], $disciplineGroup['DisciplineGroup']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Schedules', 'action' => 'delete', $schedule['Schedules']['id'],$disciplineGroup['DisciplineGroup']['id']), array(), __('Are you sure you want to delete # %s?', $schedule['Schedules']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'Schedules', 'action' => 'add', $disciplineGroup['DisciplineGroup']['id'])); ?> </li>
		</ul>
	</div>
</div>
