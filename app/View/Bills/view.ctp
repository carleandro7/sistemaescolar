
<h2><?php echo __('Bill'); ?></h2>
<div class="col-lg-4"> 
    <div class="well well-lg">
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dataavaliacao'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['dataavaliacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discipline Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bill['DisciplineGroup']['id'], array('controller' => 'discipline_groups', 'action' => 'view', $bill['DisciplineGroup']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>

