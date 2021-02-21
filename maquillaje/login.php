<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "maquillaje";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["nombre"];
$pass = $_POST["contraseña"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	//header("Location: pagina.html")
	// echo "Bienvenido:" .$nombre;
    // echo "<script> alert('Bienvenido: .$nombre');</script>";
    echo "<script>
    alert('Bienvenido: $nombre pulsa ACEPTAR para ir al inicio' );
    window.location= 'index.html' 
    </script>";
    // header("Location: index.html");
}
else if ($nr == 0) 
{
	//header("Location: login.html");
	//echo "No ingreso"; 
	echo "<script> alert('Error');window.location= 'login.html' </script>";
}
	


?>