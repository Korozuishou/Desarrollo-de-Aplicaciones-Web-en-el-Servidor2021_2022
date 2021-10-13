<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $_SESSION['entrada'] = $_POST['numeros'];
    header("Location: funcion/resolver2.php");
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario de login</title>
    <meta charset = "UTF-8">
</head>
<body>
        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			<label for = "numeros">palabras, numeros y demas 2</label> 
			<input value = "<?php if(isset($p))echo $p;?>"
			id = "numeros" name = "numeros" type = "text">				
</body>
</html>