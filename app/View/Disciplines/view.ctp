
<h2><?php echo __('Discipline'); ?></h2>
<div class="col-lg-4">
<div class="well well">
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($discipline['Discipline']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($discipline['Discipline']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chteorica'); ?></dt>
		<dd>
			<?php echo h($discipline['Discipline']['chteorica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chpratica'); ?></dt>
		<dd>
			<?php echo h($discipline['Discipline']['chpratica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cdtotal'); ?></dt>
		<dd>
			<?php echo h($discipline['Discipline']['cdtotal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($discipline['Course']['nome'], array('controller' => 'courses', 'action' => 'view', $discipline['Course']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Discipline'), array('action' => 'edit', $discipline['Discipline']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Discipline'), array('action' => 'delete', $discipline['Discipline']['id']), array(), __('Are you sure you want to delete # %s?', $discipline['Discipline']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplines'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discipline Groups'), array('controller' => 'discipline_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline Group'), array('controller' => 'discipline_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>

</div>

