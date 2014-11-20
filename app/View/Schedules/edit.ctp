<h2><?php echo __('Editar Horário'); ?></h2>
<?php echo $this->Form->create('Schedule'); 
  echo $this->Form->input('id');
?>
<fieldset>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Informações Gerais
            </div>
            
            <div class="panel-body">
                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('dia', array('label' => 'Dia da Semana', 'class' => 'form-control', 'options' => array('Domingo'=>'Domingo','Segunda'=>'Segunda','Terça'=>'Terça','Quarta'=>'Quarta','Quinta'=>'Quinta','Sexta'=>'Sexta', 'Sábado'=>'Sábado'))); ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                                  <dt><?php echo __('Inicio da Aula'); ?></dt>
                                  <dd>
                                      <?php echo $this->Form->input('inicio', array('label' => false)); ?>
                                      &nbsp;
                                  </dd>
                    </div>
                </div>

                <div class="col-lg-4">  
                    <div class="form-group">
                        <dt><?php echo __('Fim da Aula'); ?></dt>
                                  <dd>
                        <?php echo $this->Form->input('fim', array('label' => false)); ?>
                                      &nbsp;
                                  </dd>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</fieldset>
<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
<?php echo $this->Form->end(); ?>

