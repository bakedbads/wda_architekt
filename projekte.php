<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/bootstrap.min.js"></script>
    <script defer src="js/script.js"></script>
    <title>Architekt - Projekte</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img id="logo" src="img/logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Start</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="projekte.php">Projekte</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="kontakt.php">Kontakt</a>
                  </li>
                  <li class="nav-item">
                    <a href="editprojekts.php" class="nav-link">Editor</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <?php
        // Retrieve projects from the database
        $sql = "SELECT * FROM arch_projekte";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="row">';
                echo '<div class="col-lg-7 col-xl-6 col-sm-12">';
                echo '<h2>' . $row["proj_name"] . '</h2>';
                echo '<h3>' . $row["proj_subtitel"] . '</h3>';
                echo '<p>' . $row["proj_bio"] . '</p>';
                echo '<p>Nutzfläche: ' . $row["proj_area"] . '</p>';
                echo '<p>Planungsbeginn: ' . $row["proj_start"] . '</p>';
                echo '<p>Fertigstellung: ' . $row["proj_finish"] . '</p>';
                echo '<p>Bauzeit: ' . $row["proj_bauzeit"] . '</p>';
                echo '</div>';
                echo '<div class="col-lg-3 col-xl-6 col-sm-12 mt-5">';
                echo '<img class="projektimg" src="' . $row["proj_foto"] . '" alt="">';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>

    <footer>
        <div class="container-fluid  fw-bold py-5">
            <div class="row">
                <div class="offset-xl-2 col-xl-3">
                    <a class="text-decoration-none fg-dark" href="#impressum.php">Impressum</a><br>
                    <a class="text-decoration-none fg-dark" href="#datenschutz.php">Datenschutz</a>
                </div>
                <div class="offset-xl-3 col-xl-3">
                    <p>
                        Kontakt <br>
                        Telefon: +43 660 8367 495 <br>
                        E-Mail: info@architekt.at <br>
                        Adresse: Egger-Lienz-Straße 120 <br>
                        6020 Innsbruck
                    </p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>