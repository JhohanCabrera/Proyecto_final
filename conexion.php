
<?php 
//CONEXION PARA EL INICIO DE SESION
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conexion)

	die("No hay conexion: ".mysqli_connect_error());

//Variables que obrendran los valores del formulario

$nombre = $_POST['email'];
$pass = $_POST['contraseña'];

$query = mysqli_query($conexion,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");

$num_fila = mysqli_num_rows($query);

if ($num_fila == 1)
{
	header("Location: index.html");
}	
else if ($num_fila == 0)
{
	
	header("Location: index4.html");

}
?>
 

