<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylish-portfolio.min.css">
    <link rel="stylesheet" href="css/webBureau.css">
    <link rel="stylesheet" href="css/pagina-php.css">
    <title>Uw verzoek</title>
</head>
<body>
<div class="container php">
    <div class="row ">
        <div class="col-lg-12 extramarge">
            <div class="card text-center">
                <div class="card-header">
                    <h5 class="card-title">Bedankt voor uw verzoek.</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">We gaan hiermee zo snel mogelijk aan de slag. Hieronder kan u een overzicht
                        vinden van uw gegevens: </p>
                    <?php
                    if (isset($_POST["inputVNaam"]) && $_POST["inputVNaam"] != "") {
                        echo "<p> Uw naam : " . $_POST["inputVNaam"] . "</p>\n";
                    } else {
                        echo "<p> U heeft uw naam niet ingevuld. </p>\n";
                    }


                    if (isset($_POST["inputNaam"]) && $_POST["inputNaam"] != "") {
                        echo "<p> Uw familienaam : " . $_POST["inputNaam"] . "</p>\n";
                    } else {
                        echo "<p> U heeft uw familienaam niet ingevuld. </p>\n";
                    }


                    if (isset($_POST["inputMail"]) && $_POST["inputMail"] != "") {
                        echo "<p> Uw mailadres : " . $_POST["inputMail"] . "</p>\n";
                    } else {
                        echo "<p> U heeft uw mailadres niet ingevuld. </p>\n";
                    }


                    if (isset($_POST["inputReden"]) && $_POST["inputReden"] != "") {
                        echo "<p> Uw reden voor ons te contacteren is voor : " . $_POST["inputReden"] . "</p>\n";
                    } else {
                        echo "<p> U heeft de reden om ons te contacteren niet ingevuld. </p>\n";
                    }


                    if (isset($_POST["inputExtraContact"]) && $_POST["inputExtraContact"] != "") {
                        echo "<p>   U hebt gekozen voor " . $_POST["inputExtraContact"] . "</p>\n";
                    } else {
                        echo "<p> U heeft niet ingevuld of dat u op de hoogte wilt blijven. </p>\n";
                    }


                    ?>
                    <a class="btn btn-change" href="index.html">Homepagina</a>
                </div>
                <div class="card-footer text-muted">
                    <p>&copy; 2020 Webtranet</p>
                </div>
            </div>
        </div>


        </div>


    </div>

</body>
</html>