<?php

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, username, email, password) VALUES ('$name','$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "User registered successfully!";
  echo "alert('Se ha creado su usuario')";
}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  echo "alert('Ha habido un error en la creación de su usuario. Vuelva e intentarlo.')";
}
?>