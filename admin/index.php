<?php 
if(isset($_GET["login"])){
	$msg = "Sikertelen belépés";
}else{
	$msg = "Stúdio68 andmin - Bejelentkezés<br/> ";
}
if(isset($_GET["logout"])){
	$msg = "Kilépés Sikeres<br/> Bejelentkezés <br/>";
}
?>
	
	
	<div style="width:100%;text-align:center;margin-top:50px;font-size:2em;">
		<?php echo $msg;?>
		<div  style="width:50%;text-align:center;margin:auto;">
			<form action="login.php" method="post">
				<input type="text" name="username" placeholder="felhasználónév"/><br/>
				<input type="password" name="password" placeholder="jelszó"/><br/>
				<input type="submit"/>
			</form>
		</div>
	</div>
	
	
	