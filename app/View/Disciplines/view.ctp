
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

</div>

