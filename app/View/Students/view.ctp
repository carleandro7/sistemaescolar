<h2><?php echo __('Editar Estudante'); ?></h2>
			<?php echo $this->Html->link('Listar Turmas', array('controller' => 'groupStudents', 'action' => 'groupsview', $student['Student']['id'])); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo $this->Html->link('Listar Disciplinas', array('controller' => 'disciplineStudents', 'action' => 'disciplines', $student['Student']['id'])); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo $this->Html->link('Listar Pagamentos', array('controller' => 'schools', 'action' => 'view', $student['School']['id'])); ?>

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
                        <?php echo $this->Form->input('nome', array('label' => 'Nome do Aluno', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['nome'])); ?>
                    </div>
                </div>


                <div class="col-lg-4">  
                    <div class="form-group">
                        <?php echo $this->Form->input('imagem', array('type'=>'file','label' => 'Imagem', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['imagem'])); ?>
                    </div>
                </div>

                <div class="col-lg-4">    
                    <div class="form-group">
                        <dt><?php echo __('Data de Nascimento'); ?></dt>
                        <dd>
                            <?php echo $this->Form->datatime('datanascimento', array('type'=>'date','label' => false, 'minYear' => 1950,'dateFormat' => 'DMY','class' => 'form-control','readonly' => true, 'value' => $student['Student']['datanascimento'])); ?>
                        </dd>
                    </div>
                </div>
                
                 <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('sexo', array('label' => 'Sexo', 'class' => 'form-control','options' => array('Masculino'=>'Masculino','Feminino'=>'Feminino'),'readonly' => true, 'value' => $student['Student']['sexo'])); ?>
                    </div>
                </div>
                
                
                 <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('cpf', array('id'=>'cpf', 'label' => 'CPF', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['cpf'])); ?>
                    </div>
                </div>
                
                 <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('rg', array('label' => 'RG', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['rg'])); ?>
                    </div>
                </div>
                
                 <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('rgexpedidor', array('label' => 'RG Expedidor', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['rgexpedidor'])); ?>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('nomepai', array('label' => 'Nome do Pai', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['nomepai'])); ?>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('nomemae', array('label' => 'Nome da Mãe', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['nomemae'])); ?>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('school_id', array('label' => 'Escola', 'class' => 'form-control','readonly' => true, 'value' => $student['School']['id'])); ?>
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <div class="form-group">
                        <?php echo $this->Form->input('status', array('label' => 'Status', 'class' => 'form-control','options' => array('Ativo'=>'Ativo','Inativo'=>'Inativo'),'readonly' => true, 'value' => $student['Student']['status'])); ?>
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <div class="form-group">
                        <?php echo $this->Form->input('niveldiscente', array('label' => 'Nivel', 'class' => 'form-control','options' => array('Infantil'=>'Infantil','Fundamental'=>'Fundamental','Médio'=>'Médio','Técnico'=>'Técnico','Superior'=>'Superior','Pós-Graduação'=>'Pós-Graduação'),'readonly' => true, 'value' => $student['Student']['niveldiscente'])); ?>
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
                        <?php echo $this->Form->input('logradouro', array('label' => 'Logradouro', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['logradouro'])); ?>
                    </div>
                </div>

                <div class="col-lg-2 col-xs-4"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('numero', array('label' => 'Número', 'class' => 'form-control',  'onkeypress'=>'return SomenteNumero(event)','readonly' => true, 'value' => $student['Student']['numero'])); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6">    
                    <div class="form-group">
                        <?php echo $this->Form->input('cep', array('id'=>'cep', 'label' => 'CEP', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['cep'])); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('bairro', array('label' => 'Bairro', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['bairro'])); ?>
                    </div>
                </div>

                <div class="col-lg-4"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('zona', array('label' => 'Zona**', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['zona'])); ?>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="form-group">
                        <?php echo $this->Form->input('cidade', array('label' => 'Cidade', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['cidade'])); ?>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('estado', array('label' => 'Estado', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['estado'])); ?>
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
                        <?php echo $this->Form->input('fone', array('id'=>'telefone', 'label' => 'Telefone', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['fone'])); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('email', array('label' => 'E-mail', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['email'])); ?>

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
                        <?php echo $this->Form->input('deficiencia', array('label' => 'Deficiência', 'class' => 'form-control','options' => array('Não Possui'=>'Não Possui','Visual'=>'Visual','Auditiva'=>'Auditiva','Física'=>'Física'),'readonly' => true, 'value' => $student['Student']['deficiencia'])); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('alergias', array('label' => 'Alergia', 'class' => 'form-control','options' => array('Não Possui'=>'Não Possui','Possui'=>'Possui'),'readonly' => true, 'value' => $student['Student']['alergias'])); ?>

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
                        <?php echo $this->Form->input('username', array('label' => 'Nome de Usuário', 'class' => 'form-control','readonly' => true, 'value' => $student['Student']['username'])); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->Form->input('id'); ?>

<?php echo $this->Form->end(); ?>

