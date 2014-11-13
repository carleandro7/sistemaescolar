<h2><?php echo __('Editar Dados da Escola'); ?></h2>
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
                        <?php echo $this->Form->input('nome', array('label' => 'Nome da Escola', 'class' => 'form-control')); ?>
                    </div>
                </div>


                <div class="col-lg-8">  
                    <div class="form-group">
                        <?php echo $this->Form->input('razaosocial', array('label' => 'Razão Social', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('cnpj', array('label' => 'CNPJ', 'class' => 'form-control')); ?>
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
                        <?php echo $this->Form->input('numero', array('label' => 'Número', 'class' => 'form-control',  'onkeypress'=>'return SomenteNumero(event)')); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6">    
                    <div class="form-group">
                        <?php echo $this->Form->input('cep', array('id'=>'cep', 'label' => 'CEP', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('bairro', array('label' => 'Bairro', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-4"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('zona', array('label' => 'Zona', 'class' => 'form-control')); ?>
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
                        <?php echo $this->Form->input('telefone', array('id'=>'telefone', 'label' => 'Telefone', 'class' => 'form-control bfh-phone')); ?>
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


<button type="submit" class="btn btn-primary btn-block">Salvar</button>
<?php echo $this->Form->end(); ?>

<script type="text/javascript">
    jQuery(document).ready(function($){        
        $("#cpf").mask("999.999.999-99");
        $("#telefone").mask("(99) 9999-9999");
        $("#cep").mask("99999-999");
    });
</script>

<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla===8 || tecla===0) return true;
	else  return false;
    }
}
</script>