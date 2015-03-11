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

	echo $this->Html->css(array('/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min', 'font-icons/entypo/css/entypo', 'bootstrap', 'neon-core', 'neon-theme', 'neon-forms', 'custom', 'http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic'));
	echo $this->Html->script(array('jquery-1.11.2'));
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
    </head>
    <body class="page-body" >
	<div class="page-container horizontal-menu">

	    <header class="navbar navbar-fixed-top">
		<div class="navbar-inner">
		    <div class="navbar-brand">
			<?php 
		    
		    echo $this->Html->link($this->Html->image('logo@2x.png', array('width' => '88', 'alt' => '')) ,'index.html',array('escape' => false));
		    ?>
<!--			<a href="index.html">
			    <img src="img/logo@2x.png" width="88" alt="" />
			</a>-->
		    </div>
		    <ul class="navbar-nav">
			<li>
			    <a href="index.html">
				<i class="entypo-gauge"></i>
				<span>Dashboard</span>
			    </a>
			    <ul>
				<li>
				    <a href="index.html">
					<span>Dashboard 1</span>
				    </a>
				</li>

			    </ul>
			</li>
			<li class="opened active">
			    <a href="layout-api.html">
				<i class="entypo-layout"></i>
				<span>Layouts</span>
			    </a>
			    <ul>
				<li>
				    <a href="layout-api.html">
					<span>Layout API</span>
				    </a>
				</li>
				
			    </ul>
			</li>
			<li>
			    <a href="ui-panels.html">
				<i class="entypo-newspaper"></i>
				<span>UI Elements</span>
			    </a>
			    <ul>
				<li>
				    <a href="ui-panels.html">
					<span>Panels</span>
				    </a>
				</li>
				
			    </ul>
			</li>
			<li>
			    <a href="forms-main.html">
				<i class="entypo-doc-text"></i>
				<span>Forms</span>
			    </a>
			    <ul>
				<li>
				    <a href="forms-main.html">
					<span>Basic Elements</span>
				    </a>
				</li>
				
			    </ul>
			</li>
			<li>
			    <a href="extra-icons.html">
				<i class="entypo-bag"></i>
				<span>Extra</span>
				<span class="badge badge-secondary">9</span>
			    </a>
			    <ul>
				<li>
				    <a href="extra-icons.html">
					<span>Icons</span>
					<span class="badge badge-success">3</span>
				    </a>
				    <ul>
					<li>
					    <a href="extra-icons.html">
						<span>Font Awesome</span>
					    </a>
					</li>
				    </ul>
				</li>
				
			    </ul>
			</li>
			<!-- Search Bar -->
			<li id="search" class="search-input-collapsed">
			    <!-- add class "search-input-collapsed" to auto collapse search input -->
			    <form method="get" action="">
				<input type="text" name="q" class="search-input" placeholder="Search something..."/>
				<button type="submit">
				    <i class="entypo-search"></i>
				</button>
			    </form>
			</li>
		    </ul>


		    <!-- notifications and other links -->
		    <ul class="nav navbar-right pull-right">

			<!-- dropdowns -->
			<li class="dropdown">

			    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="entypo-list"></i>
				<span class="badge badge-info">6</span>
			    </a>

			    <!-- dropdown menu (tasks) -->
			    <ul class="dropdown-menu">
				<li class="top">
				    <p>You have 6 pending tasks</p>
				</li>

				<li>
				    <ul class="dropdown-menu-list scroller">
					<li>
					    <a href="#">
						<span class="task">
						    <span class="desc">Procurement</span>
						    <span class="percent">27%</span>
						</span>

						<span class="progress">
						    <span style="width: 27%;" class="progress-bar progress-bar-success">
							<span class="sr-only">27% Complete</span>
						    </span>
						</span>
					    </a>
					</li>
					<li>
					    <a href="#">
						<span class="task">
						    <span class="desc">App Development</span>
						    <span class="percent">83%</span>
						</span>

						<span class="progress progress-striped">
						    <span style="width: 83%;" class="progress-bar progress-bar-danger">
							<span class="sr-only">83% Complete</span>
						    </span>
						</span>
					    </a>
					</li>
					<li>
					    <a href="#">
						<span class="task">
						    <span class="desc">HTML Slicing</span>
						    <span class="percent">91%</span>
						</span>

						<span class="progress">
						    <span style="width: 91%;" class="progress-bar progress-bar-success">
							<span class="sr-only">91% Complete</span>
						    </span>
						</span>
					    </a>
					</li>
					<li>
					    <a href="#">
						<span class="task">
						    <span class="desc">Database Repair</span>
						    <span class="percent">12%</span>
						</span>

						<span class="progress progress-striped">
						    <span style="width: 12%;" class="progress-bar progress-bar-warning">
							<span class="sr-only">12% Complete</span>
						    </span>
						</span>
					    </a>
					</li>
					<li>
					    <a href="#">
						<span class="task">
						    <span class="desc">Backup Create Progress</span>
						    <span class="percent">54%</span>
						</span>

						<span class="progress progress-striped">
						    <span style="width: 54%;" class="progress-bar progress-bar-info">
							<span class="sr-only">54% Complete</span>
						    </span>
						</span>
					    </a>
					</li>
					<li>
					    <a href="#">
						<span class="task">
						    <span class="desc">Upgrade Progress</span>
						    <span class="percent">17%</span>
						</span>

						<span class="progress progress-striped">
						    <span style="width: 17%;" class="progress-bar progress-bar-important">
							<span class="sr-only">17% Complete</span>
						    </span>
						</span>
					    </a>
					</li>
				    </ul>
				</li>

				<li class="external">
				    <a href="#">See all tasks</a>
				</li>					</ul>

			</li>

			<li class="dropdown">

			    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="entypo-mail"></i>
				<span class="badge badge-secondary">10</span>
			    </a>

			    <!-- dropdown menu (messages) -->
			    <ul class="dropdown-menu">
				<li>
				    <ul class="dropdown-menu-list scroller">
					<li class="active">
					    <a href="#">
						<span class="image pull-right">
						    <img src="assets/images/thumb-1.png" alt="" class="img-circle" />
						</span>

						<span class="line">
						    <strong>Luc Chartier</strong>
						    - yesterday
						</span>

						<span class="line desc small">
						    This ain’t our first item, it is the best of the rest.
						</span>
					    </a>
					</li>

					<li class="active">
					    <a href="#">
						<span class="image pull-right">
						    <img src="assets/images/thumb-2.png" alt="" class="img-circle" />
						</span>

						<span class="line">
						    <strong>Salma Nyberg</strong>
						    - 2 days ago
						</span>

						<span class="line desc small">
						    Oh he decisively impression attachment friendship so if everything. 
						</span>
					    </a>
					</li>

					<li>
					    <a href="#">
						<span class="image pull-right">
						    <img src="assets/images/thumb-3.png" alt="" class="img-circle" />
						</span>

						<span class="line">
						    Hayden Cartwright
						    - a week ago
						</span>

						<span class="line desc small">
						    Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
						</span>
					    </a>
					</li>

					<li>
					    <a href="#">
						<span class="image pull-right">
						    <img src="assets/images/thumb-4.png" alt="" class="img-circle" />
						</span>

						<span class="line">
						    Sandra Eberhardt
						    - 16 days ago
						</span>

						<span class="line desc small">
						    On so attention necessary at by provision otherwise existence direction.
						</span>
					    </a>
					</li>
				    </ul>
				</li>

				<li class="external">
				    <a href="mailbox.html">All Messages</a>
				</li>					</ul>

			</li>

			<li class="dropdown">

			    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="entypo-globe"></i>
				<span class="badge badge-warning">1</span>
			    </a>

			    <!-- dropdown menu (messages) -->
			    <ul class="dropdown-menu">
				<li class="top">
				    <p class="small">
					<a href="#" class="pull-right">Mark all Read</a>
					You have <strong>3</strong> new notifications.
				    </p>
				</li>

				<li>
				    <ul class="dropdown-menu-list scroller">
					<li class="unread notification-success">
					    <a href="#">
						<i class="entypo-user-add pull-right"></i>

						<span class="line">
						    <strong>New user registered</strong>
						</span>

						<span class="line small">
						    30 seconds ago
						</span>
					    </a>
					</li>

					<li class="unread notification-secondary">
					    <a href="#">
						<i class="entypo-heart pull-right"></i>

						<span class="line">
						    <strong>Someone special liked this</strong>
						</span>

						<span class="line small">
						    2 minutes ago
						</span>
					    </a>
					</li>

					<li class="notification-primary">
					    <a href="#">
						<i class="entypo-user pull-right"></i>

						<span class="line">
						    <strong>Privacy settings have been changed</strong>
						</span>

						<span class="line small">
						    3 hours ago
						</span>
					    </a>
					</li>

					<li class="notification-danger">
					    <a href="#">
						<i class="entypo-cancel-circled pull-right"></i>

						<span class="line">
						    John cancelled the event
						</span>

						<span class="line small">
						    9 hours ago
						</span>
					    </a>
					</li>

					<li class="notification-info">
					    <a href="#">
						<i class="entypo-info pull-right"></i>

						<span class="line">
						    The server is status is stable
						</span>

						<span class="line small">
						    yesterday at 10:30am
						</span>
					    </a>
					</li>

					<li class="notification-warning">
					    <a href="#">
						<i class="entypo-rss pull-right"></i>

						<span class="line">
						    New comments waiting approval
						</span>

						<span class="line small">
						    last week
						</span>
					    </a>
					</li>
				    </ul>
				</li>

				<li class="external">
				    <a href="#">View all notifications</a>
				</li>					</ul>

			</li>

			<!-- raw links -->
			<li class="dropdown">
			<li>
			    <a href="#">Live Site</a>
			</li>
			</li>

			<li class="sep"></li>

			<li>
			    <a href="extra-login.html">
				Log Out <i class="entypo-logout right"></i>
			    </a>
			</li>


			<!-- mobile only -->
			<li class="visible-xs">	

			    <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			    <div class="horizontal-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
				    <i class="entypo-menu"></i>
				</a>
			    </div>

			</li>

		    </ul>
		</div>
	    </header>
	    <div class="main-content">

		<div class="container">
		    <?php echo $this->Session->flash(); ?>

		    <?php echo $this->fetch('content'); ?>
		</div>
	    </div>
	</div>
	<?php
	echo $this->Html->css(array('/js/jvectormap/jquery-jvectormap-1.2.2', '/js/rickshaw/rickshaw.min','/js/selectboxit/jquery.selectBoxIt'));
	echo $this->Html->script(array('gsap/main-gsap', 'jquery-ui/js/jquery-ui-1.10.3.minimal.min.js', 'bootstrap', 'joinable', 'resizeable', 'neon-api', 'jvectormap/jquery-jvectormap-1.2.2.min', 'jvectormap/jquery-jvectormap-europe-merc-en'));
	echo $this->Html->script(array('jquery.bootstrap.wizard.min.js','jquery.inputmask.bundle.min.js','selectboxit/jquery.selectBoxIt.min','jquery.sparkline.min', 'rickshaw/vendor/d3.v3', 'rickshaw/rickshaw.min', 'raphael-min', 'morris.min', 'toastr','jquery.multi-select' ,'neon-chat', 'bootstrap-switch.min.js','neon-custom', 'neon-demo'));
	echo $this->Html->script(array());
	?>

    </body>
</html>