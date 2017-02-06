<?php
//logout=============
	if(isset($_GET['logout'])) {
		unset($_SESSION['user']);
	}


//login===========
if(isset($_POST['login'])){
		$login_sql="SELECT * FROM users WHERE email='".$_POST['user_id']."' AND pass='".$_POST['pass']."'";
		$login_query=mysqli_query($db, $login_sql);
		if(mysqli_num_rows($login_query)>0) {
			$login_rs=mysqli_fetch_assoc($login_query);
			$_SESSION['user']=$login_rs['user_name'];
			$_SESSION['user_id']=$login_rs['user_id'];
			$_SESSION['user_mob']=$login_rs['mob'];
			$_SESSION['user_city']=$login_rs['citi'];
			unset($_POST['login']);
			header("Location:index.php");
		} else {
			header("Location:index.php?page=header&error=login");
			unset($_POST['login']);
		}
}
//signup============
	global $db;
if(isset($_POST['signup'])){
//text variables
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$city=$_POST['city'];

$insert_user = "insert into users(user_name,pass,email,mob,citi) values('$username','$password','$email','$mobile','$city')";
$run_user = mysqli_query($db, $insert_user);
if($run_user){
	/*echo "<script>alert('you are registered Successfuly')</script>";*/

    		$login_sql="SELECT * FROM users WHERE email='".$_POST['email']."' AND pass='".$_POST['password']."'";
		$login_query=mysqli_query($db, $login_sql);
		if(mysqli_num_rows($login_query)>0) {
			$login_rs=mysqli_fetch_assoc($login_query);
			$_SESSION['user']=$login_rs['user_name'];

			header("Location:index.php");
		} else {
			header("Location:index.php?page=header&error=login");
		}
/*}*/
}
}
// including page================
 if(!isset($_SESSION['user'])) {
		include("loginuser.php");
		} else {
		include("user.php");
		}
?>
