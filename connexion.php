<html>
<head>
<meta charset="utf8">
</head>



<body>
<?php 

include "User.php";
$conn = config::getConnexion();
$user=new User($_POST['username'],$_POST['password'],$conn);
$u=$user->Logedin($conn,$_POST['username'],$_POST['password']);
$vide=false;

if (!empty($_POST['username']) && !empty($_POST['password']))

{
	if ($_POST['username']=="ADMIN"&&$_POST['password']=="ADMIN123")
	{
		//echo '<meta http-equiv="refresh" content="0;URL=C:/wamp64/www/azizfinal/view/back/index.php">'; 
		header("location:../back");	}


	foreach($u as $t)
	{
		$vide=true;
	if ($t['username']==$_POST['username'] && $t['password']==$_POST['password'])
	{	
		session_start();
		include_once "/Projet_web/front/views/index.php";
		$_SESSION['l']=$_POST['username'];
		$_SESSION['p']=$_POST['password'];
		$_SESSION['i']=$t['id'];
		header("location:index.php");
	
		exit;
		
	}
		
		
	
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page login
         echo '<meta http-equiv="refresh" content="0;URL=../View/sign.php">'; 
      } 
}	  
 
else {
     // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'il faut tout remplir...\')">'; 
         // puis on le redirige vers la page login
         echo '<meta http-equiv="refresh" content="0;URL=../View/sign.php">';  
}  

?> 
</body>
</html>