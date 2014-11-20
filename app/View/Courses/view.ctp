<h2><?php echo __('Curso'); ?></h2>
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
                        <?php echo $this->Form->input('nome', array('label' => 'Nome do Curso', 'class' => 'form-control', 'readonly' => true, 'value' => $course['Course']['nome'])); ?>
                    </div>
                </div>

                <div class="col-lg-6 col-xs-6">  
                    <div class="form-group">
                        <?php echo $this->Form->input('municipio', array('label' => 'Municipio', 'class' => 'form-control', 'readonly' => true, 'value' => $course['Course']['municipio'])); ?>
                    </div>
                </div>

                <div class="col-lg-6 col-xs-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('natureza', array('label' => 'Natureza', 'class' => 'form-control', 'readonly' => true, 'value' => $course['Course']['natureza'])); ?>
                    </div>
                </div>

                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('formaparticipacao', array('label' => 'Forma de Participação', 'class' => 'form-control', 'readonly' => true, 'value' => $course['Course']['formaparticipacao'])); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('tipoofertacurso', array('label' => 'Tipo de oferta de Curso', 'class' => 'form-control', 'readonly' => true, 'value' => $course['Course']['tipoofertacurso'])); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6">    
                    <div class="form-group">
                        <?php echo $this->Form->input('tipoofertadisciplina', array('label' => 'Tipo de Oferta de Disciplina', 'class' => 'form-control', 'readonly' => true, 'value' => $course['Course']['tipoofertadisciplina'])); ?>
                    </div>
                </div>

                <div class="col-lg-6"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('perfilprofissional', array('type' => 'textarea', 'label' => 'Perfil Profissional', 'class' => 'form-control', 'rows' => 3, 'readonly' => true, 'value' => $course['Course']['perfilprofissional'])); ?>
                    </div>
                </div>

                <div class="col-lg-6"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('campusatuacao', array('type' => 'textarea', 'label' => 'Campus de Atuação', 'class' => 'form-control', 'rows' => 3, 'readonly' => true, 'value' => $course['Course']['campusatuacao'])); ?>
                    </div>
                </div>

                <div class="col-lg-5"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('school_id', array('label' => 'Escola', 'class' => 'form-control', 'disabled' => 'true', 'readonly' => true, 'value' => $course['School']['id'])); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-12"> 

        <div class="panel panel-default">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?php echo __('Relação de disciplinas'); ?>    
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                        <?php if (!empty($disciplines)): ?>
                            <tr>
                                <th><?php echo __('Disciplinas'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                            <?php foreach ($disciplines as $discipline): ?>
                                <tr>
                                    <td><?php echo $this->Html->link($discipline['Discipline']['nome'], array('controller' => 'Disciplines', 'action' => 'view', $discipline['Discipline']['id'])); ?></td>			
                                    <td class="actions">
                                        <?php echo $this->Html->link(__('View'), array('controller' => 'Disciplines', 'action' => 'view', $discipline['Discipline']['id'])); ?>
                                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'Disciplines', 'action' => 'edit', $discipline['Discipline']['id'], $course['Course']['id'])); ?>
                                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Disciplines', 'action' => 'delete', $discipline['Discipline']['id']), array(), __('Deseja detelar # %s?', $discipline['Discipline']['nome'])); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </table>
                    <?php echo $this->Html->link(__('Nova Disciplina'), array('controller' => 'Disciplines', 'action' => 'addcourse', $course['Course']['id'])); ?>
                </div>
            </div>

        </div>
    </div>

</div>

<?php echo $this->Form->end(); ?>
