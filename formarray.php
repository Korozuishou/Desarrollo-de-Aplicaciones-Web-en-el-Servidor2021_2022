<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {  	
	if($_POST['numero'] != 0){		
		if (!isset($_SESSION['indice'])){
            $i=0;
            $_SESSION['numero'.$i]=$_POST['numero'];
            $_SESSION['indice'] = $i;
        }
        else{
            $i=$_SESSION['indice'];
            $i++;
            $_SESSION['numero'.$i]=$_POST['numero'];
            $_SESSION['indice'] = $i;
        }
	}else{
        header("Location: resolver.php");
	}	
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>		
		<meta charset = "UTF-8">
	</head>
	<body>			
		<?php if(isset($err)){
			echo "<p> Numeros</p>";
		}?>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			<label for = "numero">numero</label> 
			<input value = "<?php if(isset($numero))echo $numero;?>"
			id = "numero" name = "numero" type = "text">
			<input type = "submit">
		</form>
	</body>
</html>