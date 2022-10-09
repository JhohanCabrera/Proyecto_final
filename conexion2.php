<?php 
//CONEXION PARA EL REGISTRO DE USUARIO
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "registrar";

//Conexion con la base de datos
$conexionr = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conexionr)
{
	die("No hay conexion: ".mysqli_connect_error());
}

$nombrer = $_POST['nombre'];
$apellidor = $_POST['apellido'];
$emailr = $_POST['email'];
$passr = $_POST['contraseñar'];

//Ingresar datos a la BD
$sql ="INSERT INTO register (nombre, apellido, correo, password) values ('$nombrer', '$apellidor', '$emailr', '$passr')";

//
if (mysqli_query($conexionr, $sql)) {

	header("Location: index4.html");
}

$queryr = mysqli_query($conexionr,"SELECT * FROM register WHERE nombre = '".$nombrer."' and password = '".$passr."'");

$num_filar = mysqli_num_rows($queryr);

if ($num_filar == 1)
{
	header("Location: index.html");
}	
else if ($num_filar == 0)
{
	
	header("Location: index4.html");

}

//$db = mysqli_select_db($dbname,$registro) or die("Error de conexion");

//Variables que obrendran los valores del formulario



//Validar que todos los campos esten con información
//$req = (strlen($nombrer)*strlen($apellidor)*strlen($emailr)*strlen($passr)) or die ("No se ha llenado todos los campos");

?>