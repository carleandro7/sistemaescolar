<h2><?php echo __('Adicionar Disciplina'); ?></h2>
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
                        <?php echo $this->Form->input('chteorica', array('type' => 'number','label' => 'Carga Horaria Teórica', 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('chpratica', array('type' => 'number','label' => 'Carga Horaria Pratica', 'class' => 'form-control')); ?>
                    </div>
                </div>
                
                <div class="col-lg-4">    
                    <div class="form-group">
                        <?php echo $this->Form->input('cdtotal', array('type' => 'number', 'label' => 'Carga Horaria Total', 'class' => 'form-control')); ?>
                    </div>
                </div>

          
                <div class="col-lg-5"> 
                    <div class="form-group">
                        <?php echo $this->Form->input('course_id', array('label' => 'Curso', 'class' => 'form-control')); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
<?php echo $this->Form->end(); ?>




	
	




<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Disciplines'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discipline Groups'), array('controller' => 'discipline_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline Group'), array('controller' => 'discipline_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
