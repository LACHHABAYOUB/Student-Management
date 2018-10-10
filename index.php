<html>
  <head>
   <title>Gestion des notes d'examens</title
    </head>

    <body background="a.png">
<html>
<body>


<form>
<br><br><br><br><br><br>
 <fieldset>
    <H1 style="text-align:center;">Gestion des notes d'examens</H1>
    <legend>Choisisiez Votre Action :</legend>
    <a href="afficheretudiant.php">Afficher  etudiants</a><br>
    <a href="ajouteretudiant.php">ajouter  etudiant</a><br>
    <a href="modifieretudiant.php">modifier  etudiant</a><br>
    <a href="suprimeretudiant.php">supprimer  etudiant</a><br>
    <br><br>
    <a href="afficherfiliere.php">Afficher  flière</a><br>
	  <a href="ajouterfiliere.php">ajouter  filière</a><br>
    <a href="modifierfilere.php">modifier  filère</a><br>
    <a href="suprimerfiliere.php">supprimer  filière</a><br>
    <br><br>
	  <a href="affichermatiere.php">Afficher  matiere</a><br>
    <a href="ajoutermatiere.php">ajouter  matiere</a><br>
    <a href="modifiermatiere.php">modifier  matiere</a><br>
    <a href="suprimermatiere.php">suprimer  matiere</a><br>

    <br><br>

	  <a href="affichernote.php">Afficher  note</a><br>
      <a href="ajoutnote.php">ajouter  note</a><br>
     <a href="modifiernote.php">Modifier  note</a><br>
    <a href="suprimernote.php">suprimer  note</a><br>

    <br><br>

	  <a href="affichersemestre.php">Afficher  semestre</a><br>
    <a href="ajoutersemestre.php">ajouter  semestre</a><br>
    <a href="modifiersemestre.php">modifier  semestre</a><br>
    <a href="suprimersemestre.php">Suprimer  semestre</a><br>

	
   </fieldset>
</form>

</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=gestionetudiant", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
   echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
</body>
</html>
