<?php
// define variables and set to empty values
$code_filiere = $nom_filiere  ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $code_filiere = test_input($_POST["code_filiere"]);
  $nom_filiere = test_input($_POST["nom_filiere"]);
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
    $sql = "INSERT INTO  filiere (code_filiere, nom_filiere)
    VALUES ('$code_filiere','$nom_filiere')";
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