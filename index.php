<!DOCTYPE html>
<html>
<head>
  <title>Formulaire</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <div class="row justify-content-center align-items-center">
      <h1 class="mb-4">Formulaire données personelles</h1>

      <div class="col-sm-8 col-md-6 ">
        <form action="traitement.php" method="POST">
          <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
          </div>

          <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
          </div>

          <div class="form-group">
            <label for="date_naissance">Date de naissance:</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
          </div>

          <div class="form-group">
            <label>Sexe:</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="sexe_homme" name="sexe" value="homme" required>
              <label class="form-check-label" for="sexe_homme">Homme</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="sexe_femme" name="sexe" value="femme" required>
              <label class="form-check-label" for="sexe_femme">Femme</label>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary ">Soumettre</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>