<?php require_once('../model/database.php') ?>
<?php require_once('../model/employee.php'); ?>

<script type="text/javascript">
	function checkForm() {
		var formArray = [];
		formArray.push(document.getElementById("first_name").value);
		formArray.push(document.getElementById("last_name").value);
		formArray.push(document.getElementById("emp_email").value);
		formArray.push(document.getElementById("emp_phone").value);
		formArray.push(document.getElementById("emp_address").value);
		var jsonString = JSON.stringify(formArray);
	      $.ajax({
	        url:"../controller/add-staff-handler.php", //the page containing php script
	        type: "POST", //request type
	        data: {data : jsonString}, 
        	cache: false,
	        success:function(result){
	        	document.getElementById("errorMsg").innerHTML = result;
	       	}
	       });
	      
	  }
</script>

<?php 
	$employee = new Employee();
	$errors = $employee->checkErrors(); 
 ?>

<h2>Add Staff</h2>

<div class="form-errors">
	<p id="errorMsg"></p>
</div>


<form class="userform" method="post" id="staff_form">
	<div class="form-group row">
	  <label for="example-text-input" class="col-md-3 col-form-label clearfix">First Name</label>
	  <div class="col-md-9">
	    <input class="form-control" type="text"  id="first_name" maxlength="50">
	  </div>
	</div>

	<div class="form-group row">
	  <label for="example-text-input" class="col-md-3 col-form-label clearfix">Last Name</label>
	  <div class="col-md-9">
	    <input class="form-control" type="text"  id="last_name" maxlength="50">
	  </div>
	</div>

	<div class="form-group row">
	  <label for="example-email-input" class="col-md-3 col-form-label">Email</label>
	  <div class="col-md-9">
	    <input class="form-control" type="email"  id="emp_email" maxlength="30">
	  </div>
	</div>

	<div class="form-group row">
	  <label for="example-tel-input" class="col-md-3 col-form-label">Phone Number</label>
	  <div class="col-md-9">
	    <input class="form-control" type="tel" id="emp_phone" maxlength="10">
	  </div>
	</div>

	<div class="form-group row">
	  <label for="example-text-input" class="col-md-3 col-form-label clearfix">Address</label>
	  <div class="col-md-9">
	    <input class="form-control" type="text" id="emp_address" maxlength="60">
	  </div>
	</div>

	<div class="form-group row">
	  <label for="example-search-input" class="col-md-2 col-form-label">Search</label>
	  <div class="col-md-10">
	    <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
	  </div>
	</div>

	<div class="form-group row">
	  <label for="example-url-input" class="col-md-2 col-form-label">URL</label>
	  <div class="col-md-10">
	    <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
	  </div>
	</div>

	<div class="form-group row">
	  <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
	  <div class="col-md-10">
	    <input class="form-control" type="password" value="hunter2" id="example-password-input">
	  </div>
	</div>
	<div class="form-group row">
	  <label for="example-number-input" class="col-md-2 col-form-label">Number</label>
	  <div class="col-md-10">
	    <input class="form-control" type="number" value="42" id="example-number-input">
	  </div>
	</div>
	<div class="form-group row">
	  <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date and time</label>
	  <div class="col-md-10">
	    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
	  </div>
	</div>
	<div class="form-group row">
	  <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
	  <div class="col-md-10">
	    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
	  </div>
	</div>
	<div class="form-group row">
	  <label for="example-month-input" class="col-md-2 col-form-label">Month</label>
	  <div class="col-md-10">
	    <input class="form-control" type="month" value="2011-08" id="example-month-input">
	  </div>
	</div>
	<div class="form-group row">
	  <label for="example-week-input" class="col-md-2 col-form-label">Week</label>
	  <div class="col-md-10">
	    <input class="form-control" type="week" value="2011-W33" id="example-week-input">
	  </div>
	</div>
	<div class="form-group row">
	  <label for="example-time-input" class="col-md-2 col-form-label">Time</label>
	  <div class="col-md-10">
	    <input class="form-control" type="time" value="13:45:00" id="example-time-input">
	  </div>
	</div>
	<div class="form-group row">
	  <label for="example-color-input" class="col-md-2 col-form-label">Color</label>
	  <div class="col-md-10">
	    <input class="form-control" type="color" value="#563d7c" id="example-color-input">
	  </div>
	</div>

	<div>
	  <button name="clear" type="button" class="btn btn-primary col-md-1 my-button-action">Clear</button>
	  <button name="submit" onclick="checkForm()" type="button" value="submit" class="btn btn-primary col-md-1 my-form-action"  method="post">Submit</button>
	</div>

</form>

