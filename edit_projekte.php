<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/bootstrap.min.js"></script>
    <script defer src="js/script.js"></script>
    <title>Architekt - Edit</title>
</head>

<body>
    
    <header class="bg-dunkel container-fluid p-0">
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
                    <a href="edit_projekte.php" class="nav-link">Editor</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Projekt Add</h2>
            </div>
        </div>
    </div>
    
    <form action="add_project.php" method="post" enctype="multipart/form-data" class="container mb-5 mt-5">
        <div class="row">
            <div class="col-md-12 mt-1">
                <input type="text" class="form-control" name="proj_name" placeholder="Name des Projektes" required>
            </div>
            <div class="col-md-12 mt-1">
                <input type="text" class="form-control" name="proj_subtitel" placeholder="Subtitel des Projektes">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-1">
                <textarea class="form-control" name="proj_bio" placeholder="Beschreibung"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-1">
                <input type="number" class="form-control" name="proj_area" placeholder="Nutzfläche">
            </div>
            <div class="col-md-12 mt-1">
                <input type="number" class="form-control" name="proj_start" placeholder="Nutzfläche">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-1">
                <input type="date" class="form-control" name="proj_finish" placeholder="Fertigstellung">
            </div>
            <div class="col-md-12 mt-1">
                <input type="number" class="form-control" name="proj_bauzeit" placeholder="Bauzeit">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-1">
                <input type="file" class="form-control-file" name="proj_foto" accept="image/*">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-1">
                <button type="submit" class="btn btn-primary">Projekt Hinzufügen</button>
            </div>
        </div>
    </form>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Projekt Edit</h2>
            </div>
        </div>
    </div>

    <form action="update_project.php" method="post" enctype="multipart/form-data" class="container mb-5 mt-5">
    <input type="hidden" name="proj_id" value="<?php echo $project_id; ?>">

    <div class="row">
        <div class="col-md-12 mt-1">
            <input type="text" class="form-control" name="proj_name" placeholder="Name des Projektes" value="<?php echo $project_name; ?>" required>
        </div>
        <div class="col-md-12 mt-1">
            <input type="text" class="form-control" name="proj_subtitel" placeholder="Subtitel des Projektes" value="<?php echo $project_subtitle; ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-1">
            <textarea class="form-control" name="proj_bio" placeholder="Beschreibung"><?php echo $project_description; ?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-1">
            <input type="number" class="form-control" name="proj_area" placeholder="Nutzfläche" value="<?php echo $project_area; ?>">
        </div>
        <div class="col-md-12 mt-1">
            <input type="date" class="form-control" name="proj_start" placeholder="Planungsbeginn" value="<?php echo $project_start_date; ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-1">
            <input type="date" class="form-control" name="proj_finish" placeholder="Fertigstellung" value="<?php echo $project_completion_date; ?>">
        </div>
        <div class="col-md-12 mt-1">
            <input type="number" class="form-control" name="proj_bauzeit" placeholder="Bauzeit" value="<?php echo $project_construction_time; ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-1">
            <input type="file" class="form-control-file" name="proj_foto" accept="image/*">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-1">
            <button type="submit" class="btn btn-primary">Projekt Aktualisieren</button>
        </div>
    </div>
</form>


</body>
