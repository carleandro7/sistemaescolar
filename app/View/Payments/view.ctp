<div class="payments view">
<h2><?php echo __('Payment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datagerado'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['datagerado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datapagamento'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['datapagamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mesreferencia'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['mesreferencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quitada'); ?></dt>
		<dd>
			<?php echo h($payment['Payment']['quitada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($payment['Student']['id'], array('controller' => 'students', 'action' => 'view', $payment['Student']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment'), array('action' => 'edit', $payment['Payment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment'), array('action' => 'delete', $payment['Payment']['id']), array(), __('Are you sure you want to delete # %s?', $payment['Payment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dockets'), array('controller' => 'dockets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docket'), array('controller' => 'dockets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dockets'); ?></h3>
	<?php if (!empty($payment['Docket'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Datagerado'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Codigobarra'); ?></th>
		<th><?php echo __('Payment Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($payment['Docket'] as $docket): ?>
		<tr>
			<td><?php echo $docket['id']; ?></td>
			<td><?php echo $docket['datagerado']; ?></td>
			<td><?php echo $docket['valor']; ?></td>
			<td><?php echo $docket['codigobarra']; ?></td>
			<td><?php echo $docket['payment_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dockets', 'action' => 'view', $docket['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dockets', 'action' => 'edit', $docket['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dockets', 'action' => 'delete', $docket['id']), array(), __('Are you sure you want to delete # %s?', $docket['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Docket'), array('controller' => 'dockets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
