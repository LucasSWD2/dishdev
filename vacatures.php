<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacatures Vlam & Vlees</title>
    <link rel="stylesheet" href="css/dishdev.css">
</head>

<?php include "includes/header.php"; ?>

<?php
$titel = "Bar";
$tekst = "Ben jij sociaal, energiek en voel jij je helemaal thuis in een levendige omgeving? Dan is werken achter de bar misschien precies wat jij zoekt! Voor onze gezellige horecalocatie in Vlam & Vlees zijn wij op zoek naar een enthousiaste Bar Medewerker die onze gasten een topavond bezorgt.";

if (isset($_POST['functie'])) {
    if ($_POST['functie'] == "kok") {
        $titel = "Kok";
        $tekst = "Heb jij een passie voor koken en krijg je energie van een drukke, professionele keuken? Dan zoeken wij jou! Voor onze horecalocatie in Vlam & Vlees zijn wij op zoek naar een enthousiaste Zelfstandig Werkend Kok die samen met het team zorgt voor smaakvolle gerechten en tevreden gasten.";
    }

    if ($_POST['functie'] == "bediening") {
        $titel = "Bediening";
        $tekst = "Ben jij gastvrij, energiek en hou je van contact met mensen? Dan is deze functie perfect voor jou! Voor onze horecalocatie in Vlam & Vlees zoeken wij een enthousiaste Medewerker Bediening die onze gasten een onvergetelijke ervaring bezorgt.";
    }

    if ($_POST['functie'] == "bar") {
        $titel = "Bar";
        $tekst = "Ben jij sociaal, energiek en voel jij je helemaal thuis in een levendige omgeving? Dan is werken achter de bar misschien precies wat jij zoekt! Voor onze gezellige horecalocatie in Vlam & Vlees zijn wij op zoek naar een enthousiaste Bar Medewerker die onze gasten een topavond bezorgt.";
    }
}
?>

<body>
    <main id="vacaturesCont">
        <section id="vacatureImg">
            <img src="images/vacatures foto.png" alt="foto 5 stoelen, 1 gele stoel in het midden, met grote tekst bovenin: Vacatures">
        </section>
        <article id="vacatureHead">
            <h1>Baan?</h1>
        </article>
        <article id="vacatureTekst">
            <p>Lijkt het je leuk om bij ons te werken? Dat is het ook. En gelukkig (voor jou) zijn wij altijd op zoek naar nieuwe enthousiaste medewerkers. op elk niveau kun je bij ons veel leren. Je krijgt goede begeleiding. En reken maar dat je in een groeiende restaurantketen genoeg kansen krijgt óm jouw droombaan te vinden</p>
        </article>
        <section id="vacatureButtons">
            <form method="POST">
                <button name="functie" value="kok">Kok</button>
                <button name="functie" value="bediening">Bediening</button>
                <button name="functie" value="bar">Bar</button>
            </form>
        </section>
        <article id="vacatureBarKokBed">
            <h1><?php echo $titel; ?></h1>
        </article>
        <article id="vacatureButtonTekst">
            <p id="vacatureInfoTekst"><?php echo $tekst; ?></p>
        </article>
        <section id="form">
            <form method="POST" enctype="multipart/form-data">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam">

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email">

                <label for="telefoon">Telefoon:</label>
                <input type="tel" id="telefoon" name="telefoon">

                <label for="cv">CV:</label>
                <label for="cv" class="cv-upload-label">UPLOAD</label>
                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx">

                <input type="submit" name="submit" value="Versturen">
            </form>
        </section>
    </main>
</body>

<?php include "includes/footer.php"; ?>
</html>