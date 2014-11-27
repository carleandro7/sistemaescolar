
<h2><?php echo __('Turma - Disciplinas'); ?></h2>

	
    <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Informações da Turma
            </div>
            
            <div class="panel-body">
                <div class="col-lg-12">
                    <div class="form-group">
                        <?php echo $this->Form->input('nome', array('label' => 'Nome da Turma', 'class' => 'form-control', 'readonly'=>true,'value'=>$group['Group']['nome'])); ?>
                    </div>
                </div>

                <div class="col-lg-4">  
                    <div class="form-group">
                        <?php echo $this->Form->input('ano', array('label' => 'Ano', 'class' => 'form-control', 'onkeypress'=>'return SomenteNumero(event)', 'readonly'=>true,'value'=>$group['Group']['ano'])); ?>
                    </div>
                </div>

                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('nivel', array('label' => 'Nivel', 'class' => 'form-control','options' => array('Infantil'=>'Infantil','Fundamental'=>'Fundamental','Médio'=>'Médio','Técnico'=>'Técnico','Superior'=>'Superior','Pós-Graduação'=>'Pós-Graduação'), 'readonly'=>true,'value'=>$group['Group']['nivel'])); ?>
                    </div>
                </div>
                
                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('local', array('label' => 'Local', 'class' => 'form-control', 'readonly'=>true,'value'=>$group['Group']['local'])); ?>
                    </div>
                </div>
                
                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('capacidade', array('label' => 'Capacidade', 'class' => 'form-control', 'onkeypress'=>'return SomenteNumero(event)', 'readonly'=>true,'value'=>$group['Group']['capacidade'])); ?>
                    </div>
                </div>
                
                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('status', array('label' => 'Status', 'class' => 'form-control','options' => array('Ativo'=>'Ativo','Inativo'=>'Inativo'), 'readonly'=>true,'value'=>$group['Group']['status'])); ?>
                    </div>
                </div>
                
                <div class="col-lg-4">    
                    <div class="form-group">
                        <dt><?php echo __('Curso'); ?></dt>
                        <dd>
			   <b><?php echo $group['Course']['nome']; ?></b>
			&nbsp;
                        </dd>
                    </div>
                </div>
              
                <?php echo $this->Form->input('id');?>
                
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
       
                                <?php 
                                if (!empty($disciplineGroups)): ?>
                                <tr>
                                        <th><?php echo __('Disciplinas'); ?></th>


                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                                <?php foreach ($disciplineGroups as $disciplineGroup): ?>
                                        <tr>
                                                <td><?php echo $this->Html->link($disciplineGroup['Discipline']['nome'], array('controller' => 'Disciplines', 'action' => 'view', $disciplineGroup['Discipline']['id'])); ?></td>


                                                <td class="actions">
                                                        <?php echo $this->Html->link(__('Notas'), array('controller' => 'Bills', 'action' => 'index', $disciplineGroup['DisciplineGroup']['id'])); ?>
                                                        <?php echo $this->Html->link(__('Frequencia'), array('controller' => 'Classnotes', 'action' => 'index', $disciplineGroup['DisciplineGroup']['id'])); ?>
                                                        <?php echo $this->Html->link(__('Professor'), array('controller' => 'DisciplineGroups', 'action' => 'edit', $disciplineGroup['DisciplineGroup']['id'], $group['Group']['id'])); ?>
                                                        <?php echo $this->Html->link(__('View'), array('controller' => 'DisciplineGroups', 'action' => 'view', $disciplineGroup['DisciplineGroup']['id'])); ?>
                                                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'DisciplineGroups', 'action' => 'delete', $disciplineGroup['DisciplineGroup']['id']), array(), __('Are you sure you want to delete # %s?', $disciplineGroup['Discipline']['id'])); ?>
                                                </td>
                                        </tr>
                                <?php endforeach; ?>
                                        <?php endif; ?>
                                </table>
                                <?php echo $this->Html->link(__('Nova Disciplina Turma'), array('controller' => 'disciplineGroups', 'action' => 'addgroup', $group['Course']['id'], $group['Group']['id']));?>
                             </div>
                        </div>
                        
                </div>
</div>
                                
 </div>       
        
   
