<script type="text/javascript">
        var onloadCallback = function () {
            grecaptcha.render('html_element', {
                'sitekey': '6LeD-gITAAAAAOAmFlsQw3VtfjNnaT48gCysShTy',
                'callback': verifyCallback,
            });
        };

        var verifyCallback = function (response) {
            alert(response);
            console.log(response);
        };
</script>

<div class="login-form">

    <div class="login-content">

	<?php
	echo $this->Form->create('User', array('id' => 'form_register', 'inputDefaults' => array(
		'label' => false,
		'div' => false
	    )
	));
	?>




	<div class="form-steps">

	    <div class="step current" id="step-1">

		<div class="form-group">
		    <div class="input-group">
			<div class="input-group-addon">
			    <i class="entypo-user"></i>
			</div>
			<?php echo $this->Form->input('first_name', array('required', 'class' => "form-control", 'name' => "name", 'id' => "name", 'placeholder' => "First Name", 'autocomplete' => "off")); ?>
			<!--<input type="text" class="form-control" name="name" id="name" placeholder="Full Name" autocomplete="off" />-->
		    </div>
		</div>

		<div class="form-group">
		    <div class="input-group">
			<div class="input-group-addon">
			    <i class="entypo-user"></i>
			</div>

			<?php echo $this->Form->input('last_name', array('required', 'class' => "form-control", 'name' => "name2", 'id' => "name2", 'placeholder' => "Last Name", 'autocomplete' => "off")); ?>
<!--<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" data-mask="phone" autocomplete="off" />-->
		    </div>
		</div>
		<div class="form-group">
		    <div class="input-group">
			<div class="input-group-addon">
			    <i class="entypo-users"></i>
			</div>
			<?php echo $this->Form->input('gender', array('options' => array('male' => 'MALE', 'female' => 'FEMALE'), 'required', 'class' => "form-control")); ?>
<!--							    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" data-mask="phone" autocomplete="off" />-->
		    </div>
		</div>
		<div class="form-group">
		    <div class="input-group">
			<div class="input-group-addon">
			    <i class="entypo-phone"></i>
			</div>

			<?php echo $this->Form->input('contact', array('type'=>'text','required', 'class' => "form-control", 'name' => "phone", 'id' => "phone", 'placeholder' => "Phone Number", 'data-mask' => "phone", 'autocomplete' => "off")); ?>
<!--							    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" data-mask="phone" autocomplete="off" />-->
		    </div>
		</div>


		<div class="form-group">
		    <div class="input-group">
			<div class="input-group-addon">
			    <i class="entypo-calendar"></i>
			</div>
			<?php echo $this->Form->input('dob', array('type'=>'text','required', 'class' => "form-control", 'name' => "birthdate", 'id' => "birthdate", 'placeholder' => "Date of Birth (DD/MM/YYYY)", 'data-mask' => "date", 'autocomplete' => "off")); ?>
<!--								<input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Date of Birth (DD/MM/YYYY)" data-mask="date" autocomplete="off" />-->
		    </div>
		</div>

		<div class="form-group">
		    <button type="button" data-step="step-2" class="btn btn-primary btn-block btn-login">
			<i class="entypo-right-open-mini"></i>
			Next Step
		    </button>
		</div>

		<div class="form-group">
		    Step 1 of 2
		</div>

	    </div>

	    <div class="step" id="step-2">

		<div class="form-group">
		    <div class="input-group">
			<div class="input-group-addon">
			    <i class="entypo-user-add"></i>
			</div>
			<?php echo $this->Form->input('username', array('required', 'minlength' => 4, 'maxlength' => 10, 'class' => "form-control", 'name' => "username", 'id' => "username", 'placeholder' => "Username", 'data-mask' => "[a-zA-Z0-1\.]+", 'data-is-regex' => "true", 'autocomplete' => "off")); ?>
			<!--<input type="text" class="form-control" name="username" id="username" placeholder="Username" data-mask="[a-zA-Z0-1\.]+" data-is-regex="true" autocomplete="off" />-->
		    </div>
		</div>

		<div class="form-group">
		    <div class="input-group">
			<div class="input-group-addon">
			    <i class="entypo-mail"></i>
			</div>
			<?php echo $this->Form->input('email', array('type'=>"email",'required', 'class' => "form-control", 'name' => "email", 'id' => "email",'placeholder' => "E-mail", 'autocomplete' => "off")); ?>
			<!--<input type="text" class="form-control" name="email" id="email" data-mask="email" placeholder="E-mail" autocomplete="off" />-->
		    </div>
		</div>

		<div class="form-group">
		    <div class="input-group">
			<div class="input-group-addon">
			    <i class="entypo-lock"></i>
			</div>
			<?php echo $this->Form->input('password', array('required', 'minlength' => 6, 'maxlength' => 20, 'class' => "form-control", 'name' => "password", 'id' => "password", 'placeholder' => "Choose Password", 'autocomplete' => "off")); ?>
			<!--<input type="password" class="form-control" name="password" id="password" placeholder="Choose Password" autocomplete="off" />-->
		    </div>
		</div>

		<div class="form-group">
		    <div class="input-group">
			<div class="input-group-addon">
			    <i class="entypo-lock"></i>
			</div>
			<?php echo $this->Form->input('password_confirm', array('minlength' => 6,'maxLength' => 20,'class' => "form-control", 'type' => 'password', 'equalTo' => '#password', 'placeholder' => "Confirm Password", 'autocomplete' => "off")); ?>
			<!--<input type="password" class="form-control" name="password" id="password" placeholder="Choose Password" autocomplete="off" />-->
		    </div>
		</div>

		<!--<div class="g-recaptcha" data-sitekey="6LeD-gITAAAAAOAmFlsQw3VtfjNnaT48gCysShTy"></div>-->
		<div id="html_element"></div>


		<div class="form-group">
		    <!--							<button type="submit" class="btn btn-success btn-block btn-login">-->
		    <i class="entypo-right-open-mini"></i>
		    <?php echo $this->Form->button('Complete Registration', array('type' => 'submit', 'class' => 'btn btn-success btn-block btn-login', 'id' => 'submit', 'title' => 'Click here to add the user')); ?>
		    
		    <!--							</button>-->
		</div>

		<div class="form-group">
		    Step 2 of 2
		</div>

	    </div>

	</div>

	<?php echo $this->Form->end(); ?>


	<div class="login-bottom-links">

	    <a href="extra-login.html" class="link">
		<i class="entypo-lock"></i>
		Return to Login Page
	    </a>

	    <br />

	    <a href="#">ToS</a>  - <a href="#">Privacy Policy</a>

	</div>

    </div>

</div>



<?php //echo __('Register'); ?>
<?php //echo $this->Form->input('first_name', array('required'));?></p>
<?php //echo $this->Form->input('last_name',array('required'));?></p>
<?php //echo $this->Form->input('contact',array('required'));?></p>
<?php //echo $this->Form->input('username',array('required', 'minlength' => 4,'maxlength'=>10,'class'=>'required'));?></p>
<?php //echo $this->Form->input('gender',array('options' => array( 'male' => 'MALE', 'female' => 'FEMALE'),'required'));?></p>
<?php //echo $this->Form->input('email');?></p>
<?php //echo $this->Form->input('dob',array('required'));?></p>
<?php //echo $this->Form->input('password',array('required','minlength' => 6,'maxlength' => 20)); ?></p>
<?php //echo $this->Form->input('password_confirm', array('label' => 'Confirm Password *', 'maxLength' => 255, 'type'=>'password', 'equalTo' => '#UserPassword')); ?></p>
<!--<div class="g-recaptcha" data-sitekey="6LeD-gITAAAAAOAmFlsQw3VtfjNnaT48gCysShTy"></div>-->
<!--<div id="html_element"></div>-->

<?php //echo $this->Form->submit('Register', array('class' => 'submit','id'=>'submit','title' => 'Click here to add the user'));?></p>

<?php //echo $this->Form->end(); ?>

<?php
if ($this->Session->check('Auth.User')) {
	echo $this->Html->link("Return to Dashboard", array('action' => 'index'));
	echo "<br>";
	echo $this->Html->link("Logout", array('action' => 'logout'));
} else {
	echo $this->Html->link("Return to Login Screen", array('action' => 'login'));
}
?>
<script>
        $(document).ready(function () {
            //$('#form_register').validate();
//            $('#username').keyup(function () {
//                var username = $('#username').val();
//                var url_path = '<?php echo $this->Html->url('/', true); ?>';
//                $.ajax({
//                    url: url_path + "Users/check_data",
//                    data: 'usnm=' + username,
//                    type: 'POST',
//                    success: function (response) {
//                        //console.log(response);
//                        if (response == 1) {
//                            $('#username').after('Username already exist');
//                        }
//                    }
//                })
//            });


        })
</script>
<!--<script>
	 $(document).ready(function () {
            $('#UserPasswordConfirm').keyup(function() {
                var pass = $('#UserPassword').val();
		var cpass = $('#UserPasswordConfirm').val();
               if(pass == cpass){
		       return true;
		       
	       }
	       else{
			$('#UserPasswordConfirm').parent('div').;
			$('#UserPasswordConfirm').after('Password does not match');
		       
	       }
            });


        })

</script>-->
