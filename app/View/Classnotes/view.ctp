<div class="classnotes view">
<h2><?php echo __('Classnote'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($classnote['Classnote']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assunto'); ?></dt>
		<dd>
			<?php echo h($classnote['Classnote']['assunto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discipline Groups'); ?></dt>
		<dd>
			<?php echo $this->Html->link($classnote['DisciplineGroup']['id'], array('controller' => 'discipline_groups', 'action' => 'view', $classnote['DisciplineGroup']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
