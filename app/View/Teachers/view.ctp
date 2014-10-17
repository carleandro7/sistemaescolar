<h2><?php echo __('Professor'); ?></h2>
    <div class="col-lg-4">
<div class="well well">

	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fone'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['fone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulacao'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['titulacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cep'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['cep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logradouro'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['logradouro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Teacher'), array('action' => 'edit', $teacher['Teacher']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Teacher'), array('action' => 'delete', $teacher['Teacher']['id']), array(), __('Are you sure you want to delete # %s?', $teacher['Teacher']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discipline Groups'), array('controller' => 'discipline_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline Group'), array('controller' => 'discipline_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Discipline Groups'); ?></h3>
	<?php if (!empty($teacher['DisciplineGroup'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Teacher Id'); ?></th>
		<th><?php echo __('Discipline Id'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($teacher['DisciplineGroup'] as $disciplineGroup): ?>
		<tr>
			<td><?php echo $disciplineGroup['id']; ?></td>
			<td><?php echo $disciplineGroup['teacher_id']; ?></td>
			<td><?php echo $disciplineGroup['discipline_id']; ?></td>
			<td><?php echo $disciplineGroup['group_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'discipline_groups', 'action' => 'view', $disciplineGroup['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'discipline_groups', 'action' => 'edit', $disciplineGroup['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'discipline_groups', 'action' => 'delete', $disciplineGroup['id']), array(), __('Are you sure you want to delete # %s?', $disciplineGroup['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Discipline Group'), array('controller' => 'discipline_groups', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
    </div>
