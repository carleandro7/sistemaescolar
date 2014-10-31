<h2><?php echo __('Curso'); ?></h2>
<div class="col-lg-4">
<div class="well well">
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($course['Course']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Municipio'); ?></dt>
		<dd>
			<?php echo h($course['Course']['municipio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Formaparticipacao'); ?></dt>
		<dd>
			<?php echo h($course['Course']['formaparticipacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Natureza'); ?></dt>
		<dd>
			<?php echo h($course['Course']['natureza']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipoofertacurso'); ?></dt>
		<dd>
			<?php echo h($course['Course']['tipoofertacurso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipoofertadisciplina'); ?></dt>
		<dd>
			<?php echo h($course['Course']['tipoofertadisciplina']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perfilprofissional'); ?></dt>
		<dd>
			<?php echo h($course['Course']['perfilprofissional']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campusatuacao'); ?></dt>
		<dd>
			<?php echo h($course['Course']['campusatuacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School'); ?></dt>
		<dd>
			<?php echo $this->Html->link($course['School']['nome'], array('controller' => 'schools', 'action' => 'view', $course['School']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>


<div class="related">
	<h3><?php echo __('Relação de disciplinas'); ?></h3>  
	<?php 
        if (!empty($disciplines)): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Disciplinas'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($disciplines as $discipline): ?>
		<tr>
                        <td><?php echo $this->Html->link($discipline['Discipline']['nome'], array('controller' => 'Disciplines', 'action' => 'view', $discipline['Discipline']['id'])); ?></td>			
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'Disciplines', 'action' => 'view', $discipline['Discipline']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'Disciplines', 'action' => 'edit', $discipline['Discipline']['id'], $course['Course']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Disciplines', 'action' => 'delete', $discipline['Discipline']['id']), array(), __('Deseja detelar # %s?', $discipline['Discipline']['nome'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
	<div class="actions">
		<ul>
		<li><?php echo $this->Html->link(__('New Discipline'), array('controller' => 'Disciplines', 'action' => 'addcourse', $course['Course']['id'])); ?> </li>
		</ul>
	</div>
</div>
</div>
