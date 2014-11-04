
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

			<?php echo $this->Html->link('Listar Turmas', array('controller' => 'groupstudents', 'action' => 'groupsview', $student['Student']['id'])); ?></br>
                        <?php echo $this->Html->link('Listar Disciplinas', array('controller' => 'disciplinestudents', 'action' => 'disciplines', $student['Student']['id'])); ?></br>
                        <?php echo $this->Html->link('Listar Pagamentos', array('controller' => 'schools', 'action' => 'view', $student['School']['id'])); ?>
