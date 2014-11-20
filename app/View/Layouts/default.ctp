<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('script');
                echo $this->Html->css('cake.generic');
                echo $this->Html->css('bootstrap');
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

	<div id="page-wrapper">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		
		</div>
	</div>


	<?php //echo $this->element('sql_dump'); 
                            echo $this->Html->script('mascaras');
                            echo $this->Html->script('jquery-1.11.0');
                            echo $this->Html->script('bootstrap.min');
                            
                            echo $this->Html->script('/plugins/morris/raphael.min');
                            echo $this->Html->script('/plugins/morris/morris.min');
                            echo $this->Html->script('/plugins/morris/morris-data');
                            echo $this->Html->script('sb-admin-2');
                            echo $this->Html->script('metisMenu.min');

        ?>
</body>
</html>
