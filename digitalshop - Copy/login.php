<?php
include('../project2019/include/navbar2.php')
?>

<?php
session_start();
include_once('config.php');
if(isset($_POST['form_login'])){
		
		
		
		
		$password = md5($_POST['password']);
		
		/* Another way to convert to md5 hashing......!
			
			$password = $_POST['password'];
			$password = md5($password);
		
		*/

	try{
	
		if(empty($_POST['username'])){
			throw new Exception('Username cannot be empty.....');
		}
		
		if(empty($_POST['password'])){
			throw new Exception('Password cannot be empty.....');
		}
		
		
		$num = 0;
		
		$statement = $db->prepare("select * from users where user_name=? and user_pass=?");
		$statement->execute(array($_POST['username'], $password));
		
		$num = $statement->rowCount();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		if($num>0){
            
			$session_name = "simple_login";			
			$_SESSION['user_id'] = $result[0]['user_id'];
			$_SESSION['name'] = $session_name;
			header('location: index.php');	
		
		} else {
			throw new Exception('Invalid Username/ Password.....');
		}
		
		
		
	
	}
	catch(Exception $e){
		$error_message = $e->getMessage();
	}

}

include ("header.php");
?>



<div class="container">
  <div >&nbsp;</div>
  <div >&nbsp;</div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="text-center text-success">Welcome In TechnoMart</h2>
			<?php 

			if(isset($error_message)){
				echo "<div class='text-danger message message_warning'>".$error_message."</div>";
			}

			?>
			<div class="login_block_bg">
				
					
				<br>
				<form action="" method="post">
				  <h3>Username :</h3>
				  <input type="text" class="form-control" name="username" placeholder="Username"/>
				  <h3>Password : </h3>
				  <input type="password" class="form-control" name="password" placeholder="Password"/>
				  <br/>
				  <input type="submit" class="btn btn-success" value="Login" name="form_login"/>
				  <a href="#">Forgot Password</a>&nbsp;&nbsp;|&nbsp; <a href="register.php">Register New User</a>
				</form>
				<div >&nbsp;</div>
				<div >&nbsp;</div>
			</div>
		</div>
    </div>
  </div>
</div>
<?php include("footer.php");?>
