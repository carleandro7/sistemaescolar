<h2><?php echo __('Editar Estudante'); ?></h2>
<?php echo $this->Form->create('Student'); ?>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Informações Pessoais
            </div>
            
            <div class="panel-body">
                <div class="col-lg-12">
                    <div class="form-group">
                        <?php echo $this->Form->input('nome', array('label' => 'Nome do Aluno', 'class' => 'form-control')); ?>
                    </div>
                </div>


                <div class="col-lg-4">  
                    <div class="form-group">
                        <?php echo $this->Form->input('imagem', array('type'=>'file','label' => 'Imagem', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('datanascimento', array('type'=>'text','label' => 'Data de Nascimento', 'class' => 'form-control')); ?>
                    </div>
                </div>
                
                 <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('sexo', array('label' => 'Sexo', 'class' => 'form-control','options' => array('Masculino'=>'Masculino','Feminino'=>'Feminino'))); ?>
                    </div>
                </div>
                
                
                 <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('cpf', array('label' => 'CPF', 'class' => 'form-control')); ?>
                    </div>
                </div>
                
                 <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('rg', array('label' => 'RG', 'class' => 'form-control')); ?>
                    </div>
                </div>
                
                 <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('rgexpedidor', array('label' => 'RG Expedidor', 'class' => 'form-control')); ?>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('nomepai', array('label' => 'Nome do Pai', 'class' => 'form-control')); ?>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('nomemae', array('label' => 'Nome da Mãe', 'class' => 'form-control')); ?>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('school_id', array('label' => 'Escola', 'class' => 'form-control')); ?>
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <div class="form-group">
                        <?php echo $this->Form->input('status', array('label' => 'Status', 'class' => 'form-control','options' => array('Ativo'=>'Ativo','Inativo'=>'Inativo'))); ?>
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <div class="form-group">
                        <?php echo $this->Form->input('niveldiscente', array('label' => 'Nivel', 'class' => 'form-control','options' => array('Infantil'=>'Infantil','Fundamental'=>'Fundamental','Médio'=>'Médio','Técnico'=>'Técnico','Superior'=>'Superior','Pós-Graduação'=>'Pós-Graduação'))); ?>
                    </div>
                </div>
                
                
            </div>
            
            
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Endereço
            </div>
            <div class="panel-body">
                <div class="col-lg-10 col-xs-8">
                    <div class="form-group">
                        <?php echo $this->Form->input('logradouro', array('label' => 'Logradouro', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-2 col-xs-4"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('numero', array('label' => 'Número', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6">    
                    <div class="form-group">
                        <?php echo $this->Form->input('cep', array('label' => 'CEP', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('bairro', array('label' => 'Bairro', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-4"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('', array('label' => 'Zona**', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="form-group">
                        <?php echo $this->Form->input('cidade', array('label' => 'Cidade', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('estado', array('label' => 'Estado', 'class' => 'form-control')); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-primary">

            <div class="panel-heading">
                Contato
            </div>
            <div class="panel-body">
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('fone', array('label' => 'Telefone', 'class' => 'form-control')); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('email', array('label' => 'E-mail', 'class' => 'form-control')); ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-primary">

            <div class="panel-heading">
                Informações Adicionais
            </div>
            <div class="panel-body">
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('deficiencia', array('label' => 'Deficiência', 'class' => 'form-control','options' => array('Não Possui'=>'Não Possui','Visual'=>'Visual','Auditiva'=>'Auditiva','Física'=>'Física'))); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('alergias', array('label' => 'Alergia', 'class' => 'form-control','options' => array('Não Possui'=>'Não Possui','Possui'=>'Possui'))); ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-primary">

            <div class="panel-heading">
                Acesso ao Sistema
            </div>
            <div class="panel-body">
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('username', array('label' => 'Nome de Usuário', 'class' => 'form-control')); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('password', array('label' => 'Senha', 'class' => 'form-control')); ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php echo $this->Form->input('id'); ?>

<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
<?php echo $this->Form->end(); ?>



<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Student.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Student.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>