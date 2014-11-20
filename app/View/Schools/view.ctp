<h2><?php echo __('Dados da Escola'); ?></h2>
<?php echo $this->Form->create('School'); ?>
 <?php echo $this->Form->input('id'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Informações Gerais
            </div>
            <div class="panel-body">
                <div class="col-lg-12">
                    <div class="form-group">
                        <?php echo $this->Form->input('nome', array('label' => 'Nome da Escola', 'class' => 'form-control', 'readonly'=>true,'value'=>$school['School']['nome'])); ?>
                    </div>
                </div>


                <div class="col-lg-8">  
                    <div class="form-group">
                        <?php echo $this->Form->input('razaosocial', array('label' => 'Razão Social', 'class' => 'form-control', 'readonly'=>true,'value'=>$school['School']['razaosocial'])); ?>
                    </div>
                </div>

                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('cnpj', array('label' => 'CNPJ', 'class' => 'form-control', 'readonly'=>true,'value'=>$school['School']['cnpj'])); ?>
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
                        <?php echo $this->Form->input('logradouro', array('label' => 'Logradouro', 'class' => 'form-control', 'readonly'=>true,'value'=>$school['School']['logradouro'])); ?>
                    </div>
                </div>

                <div class="col-lg-2 col-xs-4"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('numero', array('label' => 'Número', 'class' => 'form-control',  'onkeypress'=>'return SomenteNumero(event)', 'readonly'=>true,'value'=>$school['School']['numero'])); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6">    
                    <div class="form-group">
                        <?php echo $this->Form->input('cep', array('id'=>'cep', 'label' => 'CEP', 'class' => 'form-control', 'readonly'=>true,'value'=>$school['School']['cep'])); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('bairro', array('label' => 'Bairro', 'class' => 'form-control', 'readonly'=>true,'value'=>$school['School']['bairro'])); ?>
                    </div>
                </div>

                <div class="col-lg-4"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('zona', array('label' => 'Zona', 'class' => 'form-control', 'readonly'=>true,'value'=>$school['School']['zona'])); ?>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="form-group">
                        <?php echo $this->Form->input('cidade', array('label' => 'Cidade', 'class' => 'form-control', 'readonly'=>true,'value'=>$school['School']['cidade'])); ?>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('estado', array('label' => 'Estado', 'class' => 'form-control', 'readonly'=>true,'value'=>$school['School']['estado'])); ?>
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
                        <?php echo $this->Form->input('telefone', array('id'=>'telefone', 'label' => 'Telefone', 'class' => 'form-control bfh-phone', 'readonly'=>true,'value'=>$school['School']['telefone'])); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('email', array('label' => 'E-mail', 'class' => 'form-control', 'readonly'=>true,'value'=>$school['School']['email'])); ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<?php echo $this->Form->end(); ?>

