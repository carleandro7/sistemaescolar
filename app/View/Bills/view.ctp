<h2><?php echo __('Dados da Nota'); ?></h2>
<?php echo $this->Form->create('Bill'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Informações Gerais
            </div>
            <div class="panel-body">
                <div class="col-lg-12">
                    <div class="form-group">
                        <dt><?php echo __('Data da avaliação'); ?></dt>
                        <dd>
                            <?php echo $this->Form->input('dataavaliacao', array('label' => false, 'readonly'=>true,'value'=>$bill['Bill']['dataavaliacao'])); ?>
                            &nbsp;
                        </dd>
                    </div>
                </div>
                <div class="col-lg-8">  
                    <div class="form-group">
                        <?php echo $this->Form->input('descricao', array('label' => 'Descrição', 'class' => 'form-control', 'readonly'=>true,'value'=>$bill['Bill']['descricao'])); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->Form->end(); ?>

