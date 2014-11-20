<h2><?php echo __('Disciplina'); ?></h2>
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
                        <?php echo $this->Form->input('nome', array('label' => 'Nome da Disciplina', 'class' => 'form-control', 'readonly'=>true,'value'=>$discipline['Discipline']['nome'])); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6">  
                    <div class="form-group">
                        <?php echo $this->Form->input('chteorica', array('type' => 'number', 'label' => 'Carga Horaria Teórica', 'class' => 'form-control', 'onkeypress'=>'return SomenteNumero(event)', 'readonly'=>true,'value'=>$discipline['Discipline']['chteorica'])); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('chpratica', array('type' => 'number', 'label' => 'Carga Horaria Pratica', 'class' => 'form-control', 'onkeypress'=>'return SomenteNumero(event)', 'readonly'=>true,'value'=>$discipline['Discipline']['chpratica'])); ?>
                    </div>
                </div>

                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('cdtotal', array('type' => 'number', 'label' => 'Carga Horaria Total', 'class' => 'form-control', 'onkeypress'=>'return SomenteNumero(event)', 'readonly'=>true,'value'=>$discipline['Discipline']['cdtotal'])); ?>
                    </div>
                </div>


                <div class="col-lg-5"> 
                    <div class="form-group">
                        <!--<?php echo $this->Form->input('Course_id', array('label' => 'Curso', 'class' => 'form-control', 'disabled' =>'true')); ?>-->
                        <b> <?php echo 'Curso: '.$discipline['Course']['nome']; ?></b>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>

<?php echo $this->Form->end(); ?>
