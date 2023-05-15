<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Data List</h2>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Date de naissance</th>
          <th>Sexe</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Database connection settings
        $serverName = 'bd-server-php.database.windows.net;
        $connectionOptions = array(
            'Database' => 'bd-formulaire',
            'Uid' => 'wail-oudina',
            'PWD' => 'Database123@'
        );
        
        // Establish the database connection
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        
        // Fetch data from the "donnees" table
        $sql = "SELECT * FROM donnees";
        $stmt = sqlsrv_query($conn, $sql);
        
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        
        // Display the data in the table
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nom']."</td>";
            echo "<td>".$row['prenom']."</td>";
            echo "<td>".$row['date_naissance']->format('Y-m-d')."</td>";
            echo "<td>".$row['sexe']."</td>";
            echo "</tr>";
        }
        
        // Close the database connection
        sqlsrv_close($conn);
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>