<h2><?php echo __('Editar Curso'); ?></h2>
<?php echo $this->Form->create('Course'); ?>	
    <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Informações Gerais
            </div>

            <div class="panel-body">

                <div class="col-lg-12">
                    <div class="form-group">
                        <?php echo $this->Form->input('nome', array('label' => 'Nome do Curso', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-6 col-xs-6">  
                    <div class="form-group">
                        <?php echo $this->Form->input('municipio', array('label' => 'Municipio', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-6 col-xs-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('natureza', array('label' => 'Natureza', 'class' => 'form-control')); ?>
                    </div>
                </div>
                
                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('formaparticipacao', array('label' => 'Forma de Participação', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('tipoofertacurso', array('label' => 'Tipo de oferta de Curso', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6">    
                    <div class="form-group">
                        <?php echo $this->Form->input('tipoofertadisciplina', array('label' => 'Tipo de Oferta de Disciplina', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-6"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('perfilprofissional', array('type' => 'textarea', 'label' => 'Perfil Profissional', 'class' => 'form-control', 'rows' => 3)); ?>
                    </div>
                </div>

                <div class="col-lg-6"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('campusatuacao', array('type' => 'textarea', 'label' => 'Campus de Atuação', 'class' => 'form-control', 'rows' => 3)); ?>
                    </div>
                </div>

                <div class="col-lg-5"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('school_id', array('label' => 'Escola', 'class' => 'form-control')); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
<?php echo $this->Form->end(); ?>


</div>

