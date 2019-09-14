<?php 
		require_once ('Config/Autoload.php');
		
		use Models\Client as Client;
		
		$user = new Client();
		$user->setUsername($_POST["user"]);
		$user->setPassword($_POST["pass"]);
		


	if($user->getUsername()=="Cosme Fulanito" && $user->getPassword() == "strongPassword!")
		{
			header("Location: add-bill.php");  
		}else{
			header("Location: index.php");
			echo '<script language="javascript">alert("La Contraseña es incorrecta");</script>';
			
			
					}

?>