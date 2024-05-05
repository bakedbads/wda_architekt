<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/bootstrap.min.js"></script>
    <script defer src="js/script.js"></script>
    <title>Architekt - Landingpage</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-lg-top">
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

    
    <div class="container mt-5">
        <h1 class="text-center">Willkommen bei Architekt</h1>
    </div>

    <div class="container container-column">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slider1.jpg" class="d-block imgslider" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slider2.jpg" class="d-block imgslider" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slider3.jpg" class="d-block imgslider" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-7 col-xl-6 col-sm-12">
                <img class="projektimg" src="img/start1.jpg" alt="">
            </div>
            <div class="col-lg-5 col-xl-6 col-sm-12">
                <h2 class="mt-5">Aktuelles Projekt</h2>
                <div>
                    <p>Entdecken Sie unser neuestes Projekt: Aurora. Dieses spannende Projekt wurde kürzlich abgeschlossen und ist ein herausragendes Beispiel für unsere Expertise und unser Engagement für Exzellenz. Mit seinem eleganten Design und seiner benutzerfreundlichen Benutzeroberfläche zeigt es, wie wir die Vision eines modernen Online-Shops umgesetzt haben. (Fertiggestellt im Jahr 2024)</p>
                </div>
                <a class="btn btn-primary" href="projekte.php">
                    Zur Projektseite
                </a>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-7 col-xl-6 col-sm-12">
                <img class="projektimg" src="img/start2.jpg" alt="">
            </div>
            <div class="col-lg-5 col-xl-6 col-sm-12">
                <h2 class="mt-5">Über Uns</h2>
                <p>
                    Willkommen bei Architekt, Ihrem Partner für innovative Lösungen im Bereich Architektur und Bauplanung. Seit 2007 arbeiten wir daran, unseren Kunden qualitativ hochwertige Dienstleistungen und Produkte anzubieten, die ihren Bedürfnissen gerecht werden.
                </p>
                <a class="btn btn-primary" href="kontakt.php">
                    Kontaktiere Uns
                </a>
            </div>
        </div>
    </div>

    <div class="container container-column mt-5">
        <div class="row">

            <div class="container col-md-4 col-sm-12 dienstleistungen p-3">
                <h3>
                    Dienstleistung
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt at voluptatum, rem ullam necessitatibus? Nostrum, voluptatem maxime! Quia odit est facilis modi labore mollitia animi ullam praesentium, impedit sunt.</p>
            </div>
            <div class="container col-md-4 col-sm-12 dienstleistungen p-3">
                <h3>
                    Dienstleistung
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt at voluptatum, rem ullam necessitatibus? Nostrum, voluptatem maxime! Quia odit est facilis modi labore mollitia animi ullam praesentium, impedit sunt.</p>
            </div>
            <div class="container col-md-4 col-sm-12 dienstleistungen p-3">
                <h3>
                    Dienstleistung
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt at voluptatum, rem ullam necessitatibus? Nostrum, voluptatem maxime! Quia odit est facilis modi labore mollitia animi ullam praesentium, impedit sunt.</p>
            </div>
        </div>
    </div>

    <footer class="mt-5">
        <div class="container fw-bold py-5">
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
