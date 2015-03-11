<?php echo $this->Session->flash('auth'); ?>
<div class="login-form">

    <div class="login-content">

	<div class="form-login-error">
	    <h3>Invalid login</h3>
	    <p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
	</div>

	<?php echo $this->Form->create('User'); ?>

	<div class="form-group">

	    <div class="input-group">
		<div class="input-group-addon">
		    <i class="entypo-user"></i>
		</div>
		<?php echo $this->Form->input('username', array('class' => 'form-control', 'label' => false, 'placeholder' => 'Username', 'autocomplete' => 'off')); ?>

	    </div>

	</div>

	<div class="form-group">

	    <div class="input-group">
		<div class="input-group-addon">
		    <i class="entypo-key"></i>
		</div>
		<?php
		echo $this->Form->input('password', array('class' => 'form-control', 'label' => false, 'placeholder' => 'Password', 'autocomplete' => 'off'));
		?>
	    </div>

	</div>

	<div class="form-group">
	    <?php echo $this->Form->button('<i class="entypo-login"></i>' . __('Login'), array('class' => 'btn btn-primary btn-block btn-login', 'div' => false)); ?>

	</div>

	<!-- Implemented in v1.1.4 -->				<div class="form-group">
	    <em>- or -</em>
	</div>

	<div class="form-group">

	    <button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left facebook-button">
		Login with Facebook
		<i class="entypo-facebook"></i>
	    </button>

	</div>

	<?php echo $this->Form->end(); ?>


	<div class="login-bottom-links">
	    <?php
	    echo $this->Html->link("Add A New User", array('action' => 'register'),array('class','link')) . '<br>';
	    echo $this->Html->link("Forgot your password?", array('action' => 'frgpass'),array('class','link'));
	    ?>
	    

<!--	    <a href="#">ToS</a>  - <a href="#">Privacy Policy</a>-->

	</div>

    </div>

</div>

<?php ?>

<h2>Login</h2>

<p>&nbsp;</p>
<?php //echo $this->Session->flash('auth'); ?>
<?php //echo $this->Form->create('User'); ?>
<p>
    <?php //echo __('Please enter your username and password'); ?>
</p>
<p>
    <?php //echo $this->Form->input('username', array('class' => 'contact')); ?>
</p>
<p>////<?php
////    echo $this->Form->input('password', array('class' => 'contact'));
////    ?>
</p>

<p>
    <?php //echo $this->Form->submit(__('Login'), array('class' => 'submit', 'div' => false, 'style' => 'margin:15px;')); ?>
</p>
<?php //echo $this->Form->end(); ?>
</div><!--close form_settings-->
<?php
//echo $this->Html->link("Add A New User", array('action' => 'register')) . '<br>';
//echo $this->Html->link("Forgot Password", array('action' => 'frgpass'));
?>
