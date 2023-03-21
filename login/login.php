<?php
session_start();
include_once("../php/connection/connection.php");
/* $host = "localhost";
$user = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$con = mysqli_connect($host, $user, $password,$dbname);
if (!$con) {
 die("Conexión fallida: " . mysqli_connect_error());
} */

if(isset($_POST['iEmail'])){
 $email = $_POST['iEmail'];
 $password = $_POST['iPassword'];

 $sql = "SELECT * FROM usuarios WHERE email='".$email."'AND password='".$password."' limit 1";

 $result = mysqli_query($con,$sql);

 if(mysqli_num_rows($result)==1){
  $_SESSION['email'] = $email;
  header('Location: user.php');
  exit();
 }
 else{
  echo "Usuario o contraseña incorrectos";
  exit();
 }
}
?>