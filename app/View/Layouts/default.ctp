<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema Escolar</title>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('script');
                echo $this->Html->css('cake.generic');
                echo $this->Html->css('bootstrap.min');
                echo $this->Html->css('/plugins/metisMenu/metisMenu.min');
                echo $this->Html->css('/plugins/timeline');
                echo $this->Html->css('sb-admin-2');
                echo $this->Html->css('/plugins/morris');
                echo $this->Html->css('font-awesome-4.1.0/css/font-awesome.min');
                
                echo $this->Html->script('jquery.maskedinput-1.3');
                echo $this->Html->script('funcoes');
                         
		echo $this->fetch('meta');
                

	?>
</head>
<body>
	<div id="wrapper">

        <?php echo $this->element('MenuPrincipal');?>
         </div>

	<div id="page-wrapper">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		
		</div>



	<?php echo $this->element('sql_dump'); 
 
                            echo $this->Html->script('mascaras');
                            echo $this->Html->script('jquery');
                            echo $this->Html->script('bootstrap.min');
                            echo $this->Html->script('metisMenu.min');//nao esta chamando
                            echo $this->Html->script('/plugins/morris/raphael.min');
                            echo $this->Html->script('/plugins/morris/morris.min');
                            echo $this->Html->script('/plugins/morris/morris-data');
                            
                            echo $this->Html->script('sb-admin-2');//nao esta chamando
                           
                  

        ?>
</body>
</html>
