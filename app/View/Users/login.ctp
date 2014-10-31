<div class="users form" id="login">

    <h1>G-EDUCAR V0.1</h1>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <?php echo $this->Form->input('email', array("placeholder"=>"Email"));
        echo $this->Form->input('password', array("placeholder"=>"Password", 'label' => 'Senha'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Entrar'));?>
</div>

