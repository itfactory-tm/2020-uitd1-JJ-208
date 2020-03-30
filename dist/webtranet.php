<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uw verzoek</title>
</head>
<body>
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
<a href="index.html">Home</a>
<!-- stijl nog opmaken en css etc ,... !-->

</body>
</html>