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
        <div class="col-lg-6 offset-lg-3 col-md-9 offset-md-2 col-sm-12">
            <div class="card kaart plaatsing ">
                <img class="card-img-top" src="img/card1.jpg" alt="Samenwerking">
                <div class="card-body">
                    <h5 class="card-title">Bedankt voor uw verzoek.</h5>
                    <p class="card-text">We gaan hiermee zo snel mogelijk aan de slag. Hieronder kan u een overzicht vinden van uw gegevens: </p>
                    <?php
                    if (isset($_POST["inputVNaam"]) && $_POST["inputVNaam"] != "") {
                        echo "<p> Uw naam : " . $_POST["inputVNaam"] . "</p>\n";
                    }
                    // geen else aangezien deze required is

                    if (isset($_POST["inputNaam"]) && $_POST["inputNaam"] != "") {
                        echo "<p> Uw familienaam : " . $_POST["inputNaam"] . "</p>\n";
                    }

                    if (isset($_POST["inputMail"]) && $_POST["inputMail"] != "") {
                        echo "<p> Uw mailadres : " . $_POST["inputMail"] . "</p>\n";
                    }

                    if (isset($_POST["inputReden"]) && $_POST["inputReden"] != "") {
                        echo "<p> Uw reden voor ons te contacteren is voor : " . $_POST["inputReden"] . "</p>\n";
                    }

                    if (isset($_POST["inputExtra1"]) && $_POST["inputExtra1"] != "") {
                        echo "<p>   U hebt gekozen voor " . $_POST["inputExtra1"] . "</p>\n";
                    }

                    if (isset($_POST["inputExtra2"]) && $_POST["inputExtra2"] != "") {
                        echo "<p>   U hebt gekozen voor " . $_POST["inputExtra2"] . "</p>\n";
                    }

                    ?>
                </div>
            </div>

                <footer>
                    <div class="col-lg-6 offset-lg-3 col-md-6 col-sm-12">
                    <a class="btn btn-change" href="index.html">Homepagina</a>
                    <p>&copy; 2020 Webtranet</p>
                    </div>
                </footer>


        </div>


    <!-- stijl nog opmaken en css etc ,... !-->



</div>

</body>
</html>