<?php
include_once("connect.php");

if(isset($_POST['btnLogout'])){
	if(isset($_POST['txtPass'])&&isset($_POST['txtEmail'])){
		$pwd = $_POST['txtPass'];
		$email = $_POST['txtEmail'];
		$c = new Connect();
		$dblink = $c->connectToPDO();
		$sql = "SELECT * FROM user WHERE email = ? and password = ?";
		$stmt = $dblink->prepare($sql);
		$re = $stmt->execute(array("$email","$pwd"));
		$numrow = $stmt->rowCount();
		$row = $stmt->fetch(PDO::FETCH_BOTH);
		if ($numrow==1){
			echo "Login successfully"; 
			setcookie("cc_username",$row['fullname'],time()+3600);
			setcookie("cc_id",$row['id'],time()-3600);
			header("Location: Homepage2.php");
		} else{
			echo "Something wrong with your infomation<br>";
		}
	}else{
		echo "Please enter your information";
	}
}

if(isset($_POST['btnLogin'])){
	
}

?>
 
<div class="container">
        <h2 class="pt-3">Member Login</h2>
        <form id="form1" name="form1" method="POST" 
	action="login.php">

	<div class="row">
		<div class="form-group">				    
			<label for="txtEmail" class="col-sm-2 control-label">Email(*):  </label>
			<div class="col-sm-10">
				<input type="email" name="txtEmail" id="txtEmail" class="form-control" placeholder="Email" value=""/>
			</div>
		</div>  
		
		<div class="form-group">
			<label for="txtPass" class="col-sm-2 control-label">Password(*):  </label>			
			<div class="col-sm-10">
					<input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Password" value=""/>
			</div>
		</div> 
		<div class="form-group pt-3"> 
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<input type="submit" name="btnLogin"  class="btn btn-primary" id="btnLogin" value="Login"/>
				<input type="reset" name="btnCancel"  class="btn btn-primary" id="btnCancel" value="Cancel"/>
			</div>  
		</div>
	</div>
		
	</form>
</div>
    

<?php
include_once 'footer.php';
?>

