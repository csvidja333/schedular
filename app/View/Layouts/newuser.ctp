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
	    <?php echo $this->fetch('title'); ?>
	</title>
	<?php
	echo $this->Html->meta('icon');

	//echo $this->Html->css('cake.generic');
	//echo $this->Html->css(array('bootstrapc41a','bootstrap_cosmoc41a','bootstrap-responsive.minc41a','main.b3','main','odometer'));
	echo $this->Html->css(array('/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css', 'font-icons/entypo/css/entypo.css', 'http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic', 'bootstrap.css', 'neon-core.css', 'neon-theme.css', 'neon-forms.css', 'custom.css'));
	//echo $this->Html->css('tab');
	//echo $this->Html->script(array('jquery-1.11.2','jquery.validate','jquery.backgroundSize','odometer','ycbm.main.minc41a','bootstrap','bootstrap.min'));
	echo $this->Html->script(array('jquery-1.11.2', 'bootstrap'));
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>


    </head>
    <body class="page-body login-page login-form-fall">
	<div class="login-container">
	    <div class="login-header login-caret">

		<div class="login-content">
		    
		    <?php 
		    
		    echo $this->Html->link($this->Html->image('scheduler.png', array('width' => '120', 'alt' => '')) ,'index.html',array('escape' => false));
		    ?>
                       
		    <p class="description">Dear user, log in to access the admin area!</p>

		    <!-- progress bar indicator -->
		    <div class="login-progressbar-indicator">
			<h3>43%</h3>
			<span>logging in...</span>
		    </div>
		</div>

	    </div>

	    <div class="login-progressbar">
		<div></div>
	    </div>
	    <div id="content">

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
	    </div>

	    <script>
//                    $("#navDropdown").click(function (e) {
//                        e.stopPropagation();
//                        $('.navigation').toggleClass("open");
//                        $('#navDropdown').toggleClass("open");
//                    });
	    </script>
	</div>
	<?php //echo $this->Html->script(array('jquery.validate')); ?>
	<?php echo $this->Html->script(array('jquery.validate', 'gsap/main-gsap.js', 'joinable.js', 'resizeable.js', 'neon-api.js', 'neon-login.js', 'neon-custom.js', 'neon-demo.js','jquery.validate.min.js','neon-register.js','jquery.inputmask.bundle.min.js')); ?>
	<?php //echo $this->Html->script('tab'); ?>
	<?php //echo $this->element('sql_dump');  ?>
    </body>
</html>



