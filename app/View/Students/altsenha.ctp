<h2><?php echo __('Estudante'); ?></h2>
<div class="teachers form">
<?php echo $this->Form->create('Student'); ?>
	
     
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-primary">

            <div class="panel-heading">
                Acesso ao Sistema
            </div>
            <div class="panel-body">
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('username', array('label' => 'Nome de Usuário', 'class' => 'form-control')); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('password', array('value'=>'','label' => 'Senha', 'class' => 'form-control', 'maxlength'=>'12','size'=>'12')); ?>

                    </div>
                </div>
        <?php echo $this->Form->input('id'); ?>
                
            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
<?php echo $this->Form->end(); ?>

