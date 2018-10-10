<?php
// define variables and set to empty values
$num_semestre = $annee_univ ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num_semestre = test_input($_POST["num_semestre"]);
  $annee_univ= test_input($_POST["annee_univ"]);
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
    $sql = "UPDATE semestre SET annee_univ='$annee_univ' WHERE num_semestre=$num_semestre";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record update successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

<a href="http://localhost/mundia/">revenir</a><br>