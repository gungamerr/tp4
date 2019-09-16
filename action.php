<?php 
		require_once ('./Config/Autoload.php');
		//require_once "Models\Client.php"
		
		use Models\Client as Client;
		
		$error="pass";
		
		if(isset($_POST["user"]) && isset($_POST["pass"]))
		{	
			
			$user = new Client();
			$user->setUsername($_POST["user"]);
			$user->setPassword($_POST["pass"]);
			if($user->getUsername()==="Cosme Fulanito" && $user->getPassword() === "strongPassword!")
			//if($_POST["user"]=="Cosme Fulanito" && $_POST["pass"]== "strongPassword!")
			{
				header("Location: add-bill.php");  
			}
			else{
			header("Location: index.php?error=$error");
			}
		}else
		{
			$error="empty";
			header("Location: index.php?error=$error");
		}

?>