<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>
<h2><?php echo __('Editar Disciplina'); ?></h2>
<?php echo $this->Form->create('Discipline'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Informações Gerais
            </div>

            <div class="panel-body">

                <div class="col-lg-12">
                    <div class="form-group">
                        <?php echo $this->Form->input('nome', array('label' => 'Nome da Disciplina', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6">  
                    <div class="form-group">
                        <?php echo $this->Form->input('chteorica', array('type' => 'number', 'label' => 'Carga Horaria Teórica', 'class' => 'form-control', 'onkeypress'=>'return SomenteNumero(event)')); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('chpratica', array('type' => 'number', 'label' => 'Carga Horaria Pratica', 'class' => 'form-control', 'onkeypress'=>'return SomenteNumero(event)')); ?>
                    </div>
                </div>

                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('cdtotal', array('type' => 'number', 'label' => 'Carga Horaria Total', 'class' => 'form-control', 'onkeypress'=>'return SomenteNumero(event)')); ?>
                    </div>
                </div>

                <div class="col-lg-5"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('course_id', array('label' => 'Curso', 'class' => 'form-control', 'selected'=> $idcourse)); ?>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
<?php echo $this->Form->end(); ?>
