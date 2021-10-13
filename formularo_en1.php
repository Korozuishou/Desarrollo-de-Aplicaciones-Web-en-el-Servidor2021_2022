<?php
session_start();
/* si va bien redirige a principal.php si va mal, mensaje de error */
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if ($_POST['palabras'] !=0){
        if (!isset($_SESSION['indice'])){
            $i=0;
            $_SESSION['palabras'.$i]=$_POST['palabras'];
            $_SESSION['indice']=$i;
        }
        else{
            $i=$_SESSION['indice'];
            $i++;
            $_SESSION['palabras'.$i]=$_POST['palabras'];
            $_SESSION['indice']=$i;
            
        }
    }
    else{
    header("Location: funcion/resolver2.php");
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
		
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			<label for = "palabras">palabras, numeros y demas</label> 
			<input value = "<?php if(isset($p))echo $p;?>"
			id = "palabras" name = "palabras" type = "text">				
			
						
			
			<input type = "submit">
		</form>
	</body>
</html>