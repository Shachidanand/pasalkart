  <!---  Login  -->

<div id='myModal' class='modal'>
  <!-- Modal content -->
  <div class='modal-content' id='login'>
    <div class='modal-header'>
      <span class='close'>×</span>
      <h3>LOGIN FORM</h3>
    </div>
    <div class='modal-body'>

    <form method='POST' action='index.php?page=loginplate' enctype='multipart/form-data'>
    USER ID: <input type='text' placeholder='USERID' name="user_id" / class='inputbox'>
    PASSWORD: <input type='PASSWORD' placeholder='PASSWORD' name="pass"/ class='inputbox'>
    <?php
if(isset($_GET['error'])) {
  echo "Incorrect username or password";
}

?>
    <input type='submit' value='LOGIN' name='login' class='btn'</input>
    </form>
    </div>
    <div class='modal-footer'>
      <p>NOT REGISTERED YET <b ID='sign_up'>SIGNUP</b>  Now </p>
    </div>
  </div>

  <!--- Sign up -->
    <div class='modal-content' id='signup'>
    <div class='modal-header'>
      <span class='close'>×</span>
      <h3>SIGNUP FORM</h3>
    </div>
    <div class='modal-body'>
    <form method='post' action='index.php?page=loginplate' enctype='multipart/form-data' >
   <input type='text' placeholder='USERID' name='username' required/ class='inputbox'>
    <input type='PASSWORD' placeholder='PASSWORD' name='password'   required/ class='inputbox'>
    <input type='email' placeholder='EMAIL' name='email' required/ class='inputbox'>
    <input type='mobile' placeholder='MOBILE NO' name='mobile' required/ class='inputbox'>
	<select class='inputbox' name='city'>
    			<option>Select your city</option>
			 <option><?php getcity(); ?></option>
		</select>
    <input type='submit' value='REGISTER' name='signup' class='btn'></input>
    </form>
    </div>
    <div class='modal-footer'>
      <p>Already Registered <b ID='login_user'>LOGIN</b></p>
    </div>
  </div>
</div>
