
<h2><?php echo __('Dados do Usuário'); ?></h2>
<?php echo $this->Form->create('User'); ?>
<fieldset>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Informações Pessoais
            </div>
            
            <div class="panel-body">
                <div class="col-lg-8">
                    <div class="form-group">
                        <?php echo $this->Form->input('nome', array('label' => 'Nome do Usuário', 'class' => 'form-control', 'readonly' => true, 'value' => $user['User']['nome'])); ?>
                    </div>
                </div>
                
                <div class="col-lg-4">  
                    <div class="form-group">
                        <?php echo $this->Form->input('imagem', array('type'=>'file','label' => 'Imagem', 'class' => 'form-control', 'readonly' => true, 'value' => $user['User']['imagem'])); ?>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('school_id', array('label' => 'Escola', 'class' => 'form-control', 'readonly' => true, 'value' => $user['School']['id'])); ?>
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <div class="form-group">
                        <?php echo $this->Form->input('status', array('label' => 'Status', 'class' => 'form-control','options' => array('Ativo'=>'Ativo','Inativo'=>'Inativo'), 'readonly' => true, 'value' => $user['User']['status'])); ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <?php echo $this->Form->input('perfil', array('label' => 'Perfil', 'class' => 'form-control','options' => array('Administrador'=>'Administrador','Secretario'=>'Secretário'), 'readonly' => true, 'value' => $user['User']['perfil'])); ?>
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
                        <?php echo $this->Form->input('fone', array('id'=>'telefone', 'label' => 'Telefone', 'class' => 'form-control', 'readonly' => true, 'value' => $user['User']['fone'])); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('email', array('label' => 'E-mail', 'class' => 'form-control', 'readonly' => true, 'value' => $user['User']['email'])); ?>

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
                        <?php echo $this->Form->input('username', array('label' => 'Nome de Usuário', 'class' => 'form-control', 'readonly' => true, 'value' => $user['User']['username'])); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    		
</fieldset>
<?php echo $this->Form->end(); ?>
