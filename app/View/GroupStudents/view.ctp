
<h2><?php echo __('Group Student'); ?></h2>
<div class="col-lg-4"> 
    <div class="well well-lg">
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($groupStudent['GroupStudent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($groupStudent['Group']['nome'], array('controller' => 'groups', 'action' => 'view', $groupStudent['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($groupStudent['Student']['nome'], array('controller' => 'students', 'action' => 'view', $groupStudent['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datacadastro'); ?></dt>
		<dd>
			<?php echo h($groupStudent['GroupStudent']['datacadastro']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Group Student'), array('action' => 'edit', $groupStudent['GroupStudent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Group Student'), array('action' => 'delete', $groupStudent['GroupStudent']['id']), array(), __('Are you sure you want to delete # %s?', $groupStudent['GroupStudent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Group Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group Student'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
