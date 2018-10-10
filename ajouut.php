<?php
// define variables and set to empty values
$Code_matiere = $coefficient = $libelle = $sexe ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Code_matiere = test_input($_POST["Code_matiere"]);
  $coefficient= test_input($_POST["coefficient"]);
  $libelle = test_input($_POST["libelle"]);

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
    $sql = "INSERT INTO   matiere (Code_matiere, coefficient,libelle)
    VALUES ('$Code_matiere','$coefficient','$libelle')";
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