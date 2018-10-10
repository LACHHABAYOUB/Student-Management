<?php
// define variables and set to empty values
$id = $controle_continue = $examen_final = $rattrapage ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = test_input($_POST["id"]);
  $controle_continue= test_input($_POST["controle_continue"]);
  $examen_final = test_input($_POST["examen_final"]);
  $rattrapage = test_input($_POST["rattrapage"]);

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
    $sql = "INSERT INTO   note (id, controle_continue,examen_final,rattrapage)
    VALUES ('$id','$controle_continue','$examen_final','$rattrapage')";
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