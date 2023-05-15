<?php
// Récupérer les valeurs du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dateNaissance = $_POST['date_naissance'];
$sexe = $_POST['sexe'];

// Connexion à la base de données
$serverName = 'bd-server-php.database.windows.net';
$connectionOptions = array(
    'Database' => 'bd-formulaire',
    'Uid' => 'wail-oudina',
    'PWD' => 'Database123@'
);
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Requête d'insertion des données
$sql = "INSERT INTO donnees (nom, prenom, date_naissance, sexe) VALUES (?, ?, ?, ?)";
$params = array($nom, $prenom, $dateNaissance, $sexe);
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

echo "Données insérées avec succès.";

// Fermer la connexion
sqlsrv_close($conn);
// Redirect to index.php
header("Location: index.php");
exit();
?>