<h4>Form Wizard with Validation <small>- add class <strong>validate</strong> to the form</small></h4>
<hr />

<div class="well well-sm">
    <h4>Please fill the details to register new account.</h4>
</div>

<?php
echo $this->Form->create('setting', array('id' => 'rootwizard-2', 'class' => "form-wizard form-horizontal", 'inputDefaults' => array(
	'div' => false, 'label' => false
)));
?>
<!--<form id="rootwizard-2" method="post" action="" class="form-wizard">-->

<div class="steps-progress">
    <div class="progress-indicator"></div>
</div>

<ul>
    <li class="active">
	<a href="#tab2-1" data-toggle="tab"><span>1</span>Timings</a>
    </li>
    <li>
	<a href="#tab2-2" data-toggle="tab"><span>2</span>Recess</a>
    </li>
    <li>
	<a href="#tab2-3" data-toggle="tab"><span>3</span>Appearance</a>
    </li>
    <li>
	<a href="#tab2-4" data-toggle="tab"><span>4</span>Reminder</a>
    </li>
    <li>
	<a href="#tab2-5" data-toggle="tab"><span>5</span>Register</a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="tab2-1">

	<div class="row">

	    <div class="col-md-12">
		<div class="form-group">
		    <div class="checkbox col-md-1">
			<label>
			    <?php echo $this->Form->input('MON:', array('type' => 'checkbox', 'class' => "days", 'id' => 'cmon', 'checked' => 'true', 'div' => false)); ?>MON:
			</label>
		    </div>

		    <div id="mon">
			<div class="col-md-2">
			    <?php echo $this->Form->input('mon_in_time', array( 'placeholder' => 'IN', 'class' => "form-control in", 'id' => 'inmon', 'div' => false)); ?>
			</div>
			<div class="col-md-2">
				<?php echo $this->Form->input('mon_out_time', array('placeholder' => 'OUT', 'class' => "form-control out", 'id' => 'outmon', 'div' => false)); ?>
			</div>
			<a href="#" class="copydown">copy-to-all</a>
		    </div>
		</div>
		
		<div class="form-group">
		    <div class="checkbox col-md-1">
			<label>
			    <?php echo $this->Form->input('TUE: ', array('type' => 'checkbox', 'class' => 'days', 'id' => 'ctue', 'checked' => 'true', 'div' => false)); ?>TUE:
			</label>
		    </div>

		    <div id="tue">
			<div class="col-md-2">
			    <?php echo $this->Form->input('tue_in_time', array('placeholder' => 'IN', 'class' => 'form-control in', 'id' => 'intue', 'div' => false)); ?>
			</div>
			<div class="col-md-2">
				<?php echo $this->Form->input('tue_out_time', array('placeholder' => 'OUT', 'class' => 'form-control out', 'id' => 'outtue', 'div' => false)); ?>
			</div>
		    </div>
		</div>
		
		<div class="form-group">
		    <div class="checkbox col-md-1">
			<label>
			    <?php echo $this->Form->input('WED: ', array('type' => 'checkbox', 'class' => 'days', 'id' => 'cwed', 'checked' => 'true', 'div' => false)); ?>WED:
			</label>
		    </div>

		    <div id="wed">
			<div class="col-md-2">
			    <?php echo $this->Form->input('wed_in_time', array('placeholder' => 'IN', 'class' => 'form-control in', 'id' => 'inwed', 'div' => false)); ?>
			</div>
			<div class="col-md-2">
				<?php echo $this->Form->input('wed_out_time', array('placeholder' => 'OUT', 'class' => 'form-control out', 'id' => 'outwed', 'div' => false)); ?>
			</div>
		    </div>
		</div>
		
		<div class="form-group">
		    <div class="checkbox col-md-1">
			<label>
			    <?php echo $this->Form->input('THU: ', array('type' => 'checkbox', 'class' => 'days', 'id' => 'cthu', 'checked' => 'true', 'div' => false)); ?>THU:
			</label>
		    </div>

		    <div id="thu">
			<div class="col-md-2">
			    <?php echo $this->Form->input('thu_in_time', array('placeholder' => 'IN', 'class' => 'form-control in', 'id' => 'inthu', 'div' => false)); ?>
			</div>
			<div class="col-md-2">
			    <?php echo $this->Form->input('thu_out_time', array('placeholder' => 'OUT', 'class' => 'form-control out', 'id' => 'outthu', 'div' => false)); ?>

			</div>
		    </div>
		</div>
		
		<div class="form-group">
		    <div class="checkbox col-md-1">
			<label>
			    <?php echo $this->Form->input('FRI: ', array('type' => 'checkbox', 'class' => 'days', 'id' => 'cfri', 'checked' => 'true', 'div' => false)); ?>FRI:
			</label>
		    </div>

		    <div id="fri">
			<div class="col-md-2">
			    <?php echo $this->Form->input('fri_in_time', array('placeholder' => 'IN', 'class' => 'form-control in', 'id' => 'infri', 'div' => false)); ?>	
			</div>
			<div class="col-md-2">
			    <?php echo $this->Form->input('fri_out_time', array('placeholder' => 'OUT', 'class' => 'form-control out', 'id' => 'outfri', 'div' => false)); ?>

			</div>
		    </div>
		</div>
		
		<div class="form-group">
		    <div class="checkbox col-md-1">
			<label>
			    <?php echo $this->Form->input('SAT: ', array('type' => 'checkbox', 'class' => 'days', 'id' => 'csat', 'checked' => 'true', 'div' => false)); ?>SAT:
			</label>
		    </div>

		    <div id="sat">
			<div class="col-md-2">
			    <?php echo $this->Form->input('sat_in_time', array('placeholder' => 'IN', 'class' => 'form-control in', 'id' => 'insat', 'div' => false)); ?>
			</div>
			<div class="col-md-2">
			    <?php echo $this->Form->input('sat_out_time', array('placeholder' => 'OUT', 'class' => 'form-control out', 'id' => 'outsat', 'div' => false)); ?>

			</div>
		    </div>
		</div>
		
		<div class="form-group">
		    <div class="checkbox col-md-1">
			<label>
			    <?php echo $this->Form->input('SUN: ', array('type' => 'checkbox', 'class' => 'days', 'id' => 'csun', 'checked' => 'true', 'div' => false)); ?>SUN:
			</label>
		    </div>

		    <div id="sun">
			<div class="col-md-2">
			    <?php echo $this->Form->input('sun_in_time', array('placeholder' => 'IN', 'class' => 'form-control in', 'id' => 'insun', 'div' => false)); ?>
			</div>
			<div class="col-md-2">
			    <?php echo $this->Form->input('sun_out_time', array('placeholder' => 'OUT', 'class' => 'form-control out', 'id' => 'outsun', 'div' => false)); ?>

			</div>
		    </div>
		</div>
		

    

    <div class="outer">
	<?php echo $this->Form->input('lunch_in_time', array('label' => 'lunch start:', 'div' => false)); ?>
	<?php echo $this->Form->input('lunch_out_time', array('label' => 'lunch end:', 'div' => false)); ?>
    </div>
		
		
		
		</div>

	</div>

	




   

    
    <?php echo $this->Form->input('slot', array('options' => array('15' => '15', '30' => '30', '60' => '60'), 'label' => 'display:', 'required')); ?>minutes slot
    <?php echo $this->Form->input('min_notice', array('label' => 'minimum notice:')); ?>
    <?php echo $this->Form->input('max_notice', array('label' => 'maximum advance booking:')); ?>


    <?php //echo $this->Form->submit('Submit', array('class' => 'submit', 'id' => 'submit', 'style' => 'margin:15px,;'));  ?></p>

<?php echo $this->Form->end(); ?>

</div>

<div class="tab-pane" id="tab2-2">

    <div class="row">

	<div class="col-md-8">
	    <div class="form-group">
		<label class="control-label" for="street">Street</label>
		<input class="form-control" name="street" id="street" data-validate="required" placeholder="Enter your street address" />
	    </div>
	</div>

	<div class="col-md-4">
	    <div class="form-group">
		<label class="control-label" for="door_no">Door no.</label>
		<input class="form-control" name="door_no" id="door_no" data-validate="number" placeholder="Numbers only" />
	    </div>
	</div>

    </div>

    <div class="row">

	<div class="col-md-12">
	    <div class="form-group">
		<label class="control-label" for="address_line_2">Address Line 2</label>
		<input class="form-control" name="address_line_2" id="address_line_2" placeholder="(Optional) Secondary Address" />
	    </div>
	</div>

    </div>

    <div class="row">

	<div class="col-md-5">
	    <div class="form-group">
		<label class="control-label" for="city">City</label>
		<input class="form-control" name="city" id="city" data-validate="required" placeholder="Current city" />
	    </div>
	</div>

	<div class="col-md-4">
	    <div class="form-group">
		<label class="control-label" for="state">State</label>

		<select name="test" class="selectboxit">
		    <optgroup label="United States">
			<option value="1">Alabama</option>
			<option value="2">Boston</option>
			<option value="3">Ohaio</option>
			<option value="4">New York</option>
			<option value="5">Washington</option>
		    </optgroup>
		</select>
	    </div>
	</div>

	<div class="col-md-3">
	    <div class="form-group">
		<label class="control-label" for="zip">Zip</label>
		<input class="form-control" name="zip" id="zip" data-mask="** *** **" data-validate="required" placeholder="Zip Code" />
	    </div>
	</div>

    </div>

</div>

<div class="tab-pane" id="tab2-3">

    <strong>Primary School</strong>
    <br />
    <br />

    <div class="row">

	<div class="col-md-4">
	    <div class="form-group">
		<label class="control-label" for="prim_subject">Subject</label>
		<input class="form-control" name="prim_subject" id="prim_subject" data-validate="require" placeholder="Graduation Degree" />
	    </div>
	</div>

	<div class="col-md-4">
	    <div class="form-group">
		<label class="control-label" for="prim_school">School Name</label>
		<input class="form-control" name="prim_school" id="prim_school" placeholder="Which school did you attended" />
	    </div>
	</div>

	<div class="col-md-2">
	    <div class="form-group">
		<label class="control-label" for="prim_date_start">Start Date</label>
		<input class="form-control datepicker" name="prim_date_start" id="prim_date_start" data-start-view="2" placeholder="(Optional)" />
	    </div>
	</div>

	<div class="col-md-2">
	    <div class="form-group">
		<label class="control-label" for="prim_date_end">End Date</label>
		<input class="form-control datepicker" name="prim_date_end" id="prim_date_end" data-start-view="2" placeholder="(Optional)" />
	    </div>
	</div>

    </div>

    <br />

    <strong>Secondary School</strong>
    <br />
    <br />

    <div class="row">

	<div class="col-md-4">
	    <div class="form-group">
		<label class="control-label" for="second_subject">Subject</label>
		<input class="form-control" name="second_subject" id="second_subject" data-validate="require" placeholder="High School" />
	    </div>
	</div>

	<div class="col-md-4">
	    <div class="form-group">
		<label class="control-label" for="second_school">School Name</label>
		<input class="form-control" name="second_school" id="second_school" placeholder="Which school did you attended" />
	    </div>
	</div>

	<div class="col-md-2">
	    <div class="form-group">
		<label class="control-label" for="second_date_start">Start Date</label>
		<input class="form-control datepicker" name="second_date_start" id="second_date_start" data-start-view="2" placeholder="(Optional)" />
	    </div>
	</div>

	<div class="col-md-2">
	    <div class="form-group">
		<label class="control-label" for="second_date_end">End Date</label>
		<input class="form-control datepicker" name="second_date_end" id="second_date_end" data-start-view="2" placeholder="(Optional)" />
	    </div>
	</div>

    </div>

    <br />

    <div class="row">

	<div class="col-md-12">
	    <div class="form-group">
		<label class="control-label" for="other_qualifications"><strong>Other Qualifications</strong></label>
		<textarea class="form-control autogrow" name="other_qualifications" id="other_qualifications" placeholder="List one subject per row"></textarea>
	    </div>
	</div>

    </div>

</div>

<div class="tab-pane" id="tab2-4">

    <strong>Current &amp; Past Jobs</strong>
    <br />
    <br />

    <div class="row">

	<div class="col-md-1">
	    <label class="control-label">&nbsp;</label>
	    <p class="text-right">
		<span class="label label-info">1</span>
	    </p>
	</div>

	<div class="col-md-3">
	    <div class="form-group">
		<label class="control-label" for="job_position_1">Company Name</label>
		<input class="form-control" name="job_position_1" id="job_position_1" data-validate="require" placeholder="Your current job" />
	    </div>
	</div>

	<div class="col-md-4">
	    <div class="form-group">
		<label class="control-label" for="job_position_1">Job Position</label>
		<input class="form-control" name="job_position_1" id="job_position_1" data-validate="require" placeholder="Your current position" />
	    </div>
	</div>

	<div class="col-md-2">
	    <div class="form-group">
		<label class="control-label" for="job_position_start_date_1">Start Date</label>
		<input class="form-control datepicker" name="job_position_start_date_1" id="job_position_start_date_1" placeholder="(Optional)" />
	    </div>
	</div>

	<div class="col-md-2">
	    <div class="form-group">
		<label class="control-label" for="job_position_end_date_1">End Date</label>
		<input class="form-control datepicker" name="job_position_end_date_1" id="job_position_end_date_1" placeholder="(Optional)" />
	    </div>
	</div>

    </div>

    <div class="row">

	<div class="col-md-1">
	    <label class="control-label">&nbsp;</label>
	    <p class="text-right">
		<span class="label label-info">2</span>
	    </p>
	</div>

	<div class="col-md-3">
	    <div class="form-group">
		<label class="control-label" for="job_position_2">Company Name</label>
		<input class="form-control" name="job_position_2" id="job_position_2" data-validate="require" placeholder="(Optional)" />
	    </div>
	</div>

	<div class="col-md-4">
	    <div class="form-group">
		<label class="control-label" for="job_position_2">Job Position</label>
		<input class="form-control" name="job_position_2" id="job_position_2" data-validate="require" placeholder="(Optional)" />
	    </div>
	</div>

	<div class="col-md-2">
	    <div class="form-group">
		<label class="control-label" for="job_position_start_date_2">Start Date</label>
		<input class="form-control datepicker" name="job_position_start_date_2" id="job_position_start_date_2" placeholder="(Optional)" />
	    </div>
	</div>

	<div class="col-md-2">
	    <div class="form-group">
		<label class="control-label" for="job_position_end_date_2">End Date</label>
		<input class="form-control datepicker" name="job_position_end_date_2" id="job_position_end_date_2" placeholder="(Optional)" />
	    </div>
	</div>

    </div>

    <div class="row">

	<div class="col-md-1">
	    <label class="control-label">&nbsp;</label>
	    <p class="text-right">
		<span class="label label-info">3</span>
	    </p>
	</div>

	<div class="col-md-3">
	    <div class="form-group">
		<label class="control-label" for="job_position_3">Company Name</label>
		<input class="form-control" name="job_position_3" id="job_position_3" data-validate="require" placeholder="(Optional)" />
	    </div>
	</div>

	<div class="col-md-4">
	    <div class="form-group">
		<label class="control-label" for="job_position_3">Job Position</label>
		<input class="form-control" name="job_position_3" id="job_position_3" data-validate="require" placeholder="(Optional)" />
	    </div>
	</div>

	<div class="col-md-2">
	    <div class="form-group">
		<label class="control-label" for="job_position_start_date_3">Start Date</label>
		<input class="form-control datepicker" name="job_position_start_date_3" id="job_position_start_date_3" placeholder="(Optional)" />
	    </div>
	</div>

	<div class="col-md-2">
	    <div class="form-group">
		<label class="control-label" for="job_position_end_date_3">End Date</label>
		<input class="form-control datepicker" name="job_position_end_date_3" id="job_position_end_date_3" placeholder="(Optional)" />
	    </div>
	</div>

    </div>

    <div class="row">

	<div class="col-md-1">
	    <label class="control-label">&nbsp;</label>
	    <p class="text-right">
		<span class="label label-info">4</span>
	    </p>
	</div>

	<div class="col-md-3">
	    <div class="form-group">
		<label class="control-label" for="job_position_4">Company Name</label>
		<input class="form-control" name="job_position_4" id="job_position_4" data-validate="require" placeholder="(Optional)" />
	    </div>
	</div>

	<div class="col-md-4">
	    <div class="form-group">
		<label class="control-label" for="job_position_4">Job Position</label>
		<input class="form-control" name="job_position_4" id="job_position_4" data-validate="require" placeholder="(Optional)" />
	    </div>
	</div>

	<div class="col-md-2">
	    <div class="form-group">
		<label class="control-label" for="job_position_start_date_4">Start Date</label>
		<input class="form-control datepicker" name="job_position_start_date_4" id="job_position_start_date_4" placeholder="(Optional)" />
	    </div>
	</div>

	<div class="col-md-2">
	    <div class="form-group">
		<label class="control-label" for="job_position_end_date_4">End Date</label>
		<input class="form-control datepicker" name="job_position_end_date_4" id="job_position_end_date_4" placeholder="(Optional)" />
	    </div>
	</div>

    </div>

</div>

<div class="tab-pane" id="tab2-5">

    <div class="form-group">
	<label class="control-label">Choose Username</label>

	<div class="input-group">
	    <div class="input-group-addon">
		<i class="entypo-user"></i>
	    </div>

	    <input type="text" class="form-control" name="username" id="username" data-validate="required,minlength[5]" data-message-minlength="Username must have minimum of 5 chars." placeholder="Could also be your email" />
	</div>
    </div>

    <div class="row">

	<div class="col-md-6">
	    <div class="form-group">
		<label class="control-label">Choose Password</label>

		<div class="input-group">
		    <div class="input-group-addon">
			<i class="entypo-key"></i>
		    </div>

		    <input type="password" class="form-control" name="password" id="password" data-validate="required" placeholder="Enter strong password" />
		</div>
	    </div>
	</div>

	<div class="col-md-6">						
	    <div class="form-group">
		<label class="control-label">Repeat Password</label>

		<div class="input-group">
		    <div class="input-group-addon">
			<i class="entypo-cw"></i>
		    </div>

		    <input type="password" class="form-control" name="password" id="password" data-validate="required,equalTo[#password]" data-message-equal-to="Passwords doesn't match." placeholder="Confirm password" />
		</div>
	    </div>
	</div>

    </div>

    <div class="row">

	<div class="col-md-6">	
	    <div class="form-group">
		<label class="control-label">Include Services</label>


		<select multiple="multiple" name="my-select[]" class="form-control multi-select">
		    <option value="1">Web Builder</option>
		    <option value="2" selected>Server Side Scripting</option>
		    <option value="3">Secure Connection</option>
		    <option value="4" selected>Database Access</option>
		    <option value="5" selected>Email</option>
		    <option value="6">eCommerce</option>
		</select>
	    </div>
	</div>

	<div class="col-md-6">
	    <div class="form-group">
		<label class="control-label">Gender</label>

		<br />

		<div class="make-switch switch-small" data-on-label="M" data-off-label="F">
		    <input type="checkbox" checked>
		</div>
	    </div>	

	    <div class="form-group">
		<label class="control-label">Subscribe for Newsletter</label>

		<br />

		<div class="make-switch switch-small" data-on-label="Yes" data-off-label="No">
		    <input type="checkbox" checked>
		</div>
	    </div>

	    <div class="form-group">
		<label class="control-label">
		    Auto-renew Subscription 
		    <span class="label label-warning">Yearly</span>
		</label>

		<br />

		<div class="make-switch switch-small" data-on-label="Yes" data-off-label="No">
		    <input type="checkbox" checked>
		</div>
	    </div>
	</div>

    </div>


    <div class="form-group">
	<div class="checkbox checkbox-replace">
	    <input type="checkbox" name="chk-rules" id="chk-rules" data-validate="required" data-message-message="You must accept rules in order to complete this registration.">
	    <label for="chk-rules">By registering I accept terms and conditions.</label>
	</div>
    </div>

    <div class="form-group">
	<button type="submit" class="btn btn-primary">Finish Registration</button>
    </div>

</div>

<ul class="pager wizard">
    <li class="previous">
	<a href="#"><i class="entypo-left-open"></i> Previous</a>
    </li>

    <li class="next">
	<a href="#">Next <i class="entypo-right-open"></i></a>
    </li>
</ul>
</div>

</form>


<script>
        jQuery(document).ready(function () {
            jQuery('.days').click(function () {
                var id = this.id;
                var newValue = id.replace('c', '');
                //console.log(newValue);
                if (jQuery('#' + id).is(':checked')) {
                    jQuery('#' + newValue).show();
                } else {
                    jQuery('#' + newValue).hide();
                    jQuery('#' + newValue + ' input').val('');
                }

            })

            jQuery(".tag").click(function () {
                $('.accordion__content').hide();
                $(this).next().show().prev().addClass('active').siblings().removeClass('active');
                autoSave();
                return false;

            });
            jQuery(".copydown").click(function () {

                labelText = $(".copydown").text();
                if (labelText == 'copy-to-all') {
                    var oin = $('#inmon').val()
                    var oout = $('#outmon').val();
                    $('.in').val(oin);
                    $('.out').val(oout);
                    $('.copydown').text('reset');
                } else {
                    $('.in').val('');
                    $('.out').val('');
                    $('.copydown').text('copy-to-all');
                }



            });


        })

        function autoSave() {
            var formData = jQuery("#time").serialize();
            var url_path = '<?php echo $this->Html->url('/', true); ?>';
            jQuery.ajax({
                type: "POST",
                url: url_path + "Settings/time",
                data: formData, //only input
                success: function (response) {

                }
            });


        }
</script>


