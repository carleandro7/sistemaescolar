
<h2><?php echo __('Student'); ?></h2>

<div class="col-lg-4"> 
    <div class="well well-lg">
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($student['Student']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($student['Student']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($student['Student']['imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fone'); ?></dt>
		<dd>
			<?php echo h($student['Student']['fone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($student['Student']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datanascimento'); ?></dt>
		<dd>
			<?php echo h($student['Student']['datanascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Niveldiscente'); ?></dt>
		<dd>
			<?php echo h($student['Student']['niveldiscente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npais'); ?></dt>
		<dd>
			<?php echo h($student['Student']['npais']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nmunicipio'); ?></dt>
		<dd>
			<?php echo h($student['Student']['nmunicipio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nuf'); ?></dt>
		<dd>
			<?php echo h($student['Student']['nuf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logradouro'); ?></dt>
		<dd>
			<?php echo h($student['Student']['logradouro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cep'); ?></dt>
		<dd>
			<?php echo h($student['Student']['cep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($student['Student']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($student['Student']['bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($student['Student']['cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($student['Student']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alergias'); ?></dt>
		<dd>
			<?php echo h($student['Student']['alergias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deficiencia'); ?></dt>
		<dd>
			<?php echo h($student['Student']['deficiencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nomepai'); ?></dt>
		<dd>
			<?php echo h($student['Student']['nomepai']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nomemae'); ?></dt>
		<dd>
			<?php echo h($student['Student']['nomemae']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($student['Student']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rg'); ?></dt>
		<dd>
			<?php echo h($student['Student']['rg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rgexpedidor'); ?></dt>
		<dd>
			<?php echo h($student['Student']['rgexpedidor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($student['Student']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($student['Student']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($student['Student']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($student['Student']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School'); ?></dt>
		<dd>
			<?php echo $this->Html->link($student['School']['nome'], array('controller' => 'schools', 'action' => 'view', $student['School']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['id']), array(), __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Payments'); ?></h3>
	<?php if (!empty($student['Payment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Datagerado'); ?></th>
		<th><?php echo __('Datapagamento'); ?></th>
		<th><?php echo __('Mesreferencia'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Quitada'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Payment'] as $payment): ?>
		<tr>
			<td><?php echo $payment['id']; ?></td>
			<td><?php echo $payment['datagerado']; ?></td>
			<td><?php echo $payment['datapagamento']; ?></td>
			<td><?php echo $payment['mesreferencia']; ?></td>
			<td><?php echo $payment['valor']; ?></td>
			<td><?php echo $payment['descricao']; ?></td>
			<td><?php echo $payment['quitada']; ?></td>
			<td><?php echo $payment['student_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payments', 'action' => 'view', $payment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payments', 'action' => 'edit', $payment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payments', 'action' => 'delete', $payment['id']), array(), __('Are you sure you want to delete # %s?', $payment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
