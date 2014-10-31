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

<h2><?php echo __('Editar Turma'); ?></h2>

<?php echo $this->Form->create('Group'); ?>
	
    <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Informações da Turma
            </div>
            
            <div class="panel-body">
                <div class="col-lg-12">
                    <div class="form-group">
                        <?php echo $this->Form->input('nome', array('label' => 'Nome da Turma', 'class' => 'form-control')); ?>
                    </div>
                </div>


                <div class="col-lg-4">  
                    <div class="form-group">
                        <?php echo $this->Form->input('ano', array('label' => 'Ano', 'class' => 'form-control', 'onkeypress'=>'return SomenteNumero(event)')); ?>
                    </div>
                </div>

                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('nivel', array('label' => 'Nivel', 'class' => 'form-control','options' => array('Infantil'=>'Infantil','Fundamental'=>'Fundamental','Médio'=>'Médio','Técnico'=>'Técnico','Superior'=>'Superior','Pós-Graduação'=>'Pós-Graduação'))); ?>
                    </div>
                </div>
                
                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('local', array('label' => 'Local', 'class' => 'form-control')); ?>
                    </div>
                </div>
                
                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('capacidade', array('label' => 'Capacidade', 'class' => 'form-control', 'onkeypress'=>'return SomenteNumero(event)')); ?>
                    </div>
                </div>
                
                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('status', array('label' => 'Status', 'class' => 'form-control','options' => array('Ativo'=>'Ativo','Inativo'=>'Inativo'))); ?>
                    </div>
                </div>
                
                <div class="col-lg-12">    
                    <div class="form-group">
                        <b><?php echo 'Curso: '.$dadosGroup['Course']['nome']; ?></b>
                    </div>
                </div>
              
                <?php echo $this->Form->input('id');?>
                
            </div>
            
            
        </div>
    </div>
</div>
        
<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
<?php echo $this->Form->end(); ?>
	