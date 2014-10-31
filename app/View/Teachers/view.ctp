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

    <div class="related">
            <h3><?php echo __('Related Discipline Groups'); ?></h3>
            <?php if (!empty($teacher['DisciplineGroup'])): ?>
            <table cellpadding = "0" cellspacing = "0">
            <tr>
                    <th><?php echo __('Disciplina'); ?></th>
                    <th><?php echo __('Tumra'); ?></th>
                    <th><?php echo __('Ano'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($disciplineGroups as $disciplineGroup): ?>
                    <tr>
                            <td><?php echo $disciplineGroup['Discipline']['nome']; ?></td>
                            <td><?php echo $disciplineGroup['Group']['nome']; ?></td>
                            <td><?php echo $disciplineGroup['Group']['ano']; ?></td>
                            <td class="actions">
                                    <?php echo $this->Html->link(__('View'), array('controller' => 'discipline_groups', 'action' => 'view', $disciplineGroup['DisciplineGroup']['id'])); ?>
                                    <?php echo $this->Html->link(__('Edit'), array('controller' => 'discipline_groups', 'action' => 'edit', $disciplineGroup['DisciplineGroup']['id'])); ?>
                            </td>
                    </tr>
            <?php endforeach; ?>
            </table>
    <?php endif; ?>

     </div>
</div>
