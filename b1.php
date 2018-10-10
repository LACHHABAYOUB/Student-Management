<?php
// define variables and set to empty values
$id = $nom = $email = $sexe ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = test_input($_POST["id"]);
  $nom= test_input($_POST["nom"]);
  $email = test_input($_POST["email"]);
  $sexe = test_input($_POST["sexe"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestionetudiant";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO   etudiant (id, nom,email,sexe)
    VALUES ('$id','$nom','$email','$sexe')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

<a href="http://localhost/mundia/">revenir</a><br>