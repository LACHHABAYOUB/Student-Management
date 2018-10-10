<?php

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



    $sql = "UPDATE filiere SET nom_filiere='$nom_filiere' WHERE code_filiere=$code_filiere";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
<a href="http://localhost/mundia/">revenir</a><br>