<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="css/dishdev.css">
    <script src="js/script.js" defer></script>
</head>
<?php
include "includes/header.php";
?>

<body>

<section id="innerkleur">

<img src="images/Schermafbeelding 2026-03-27 202020.png" class="reserveimg" alt="reservering">

<h1 class="reserveh1">Reservatie</h1>

<section id="placeholders">


<section class="naamres"> 
    <label>Naam:</label>
    <input type="text" placeholder="">

</section>

<section class="telefoon"> 
    <label>Telefoon:</label>
    <input type="text" placeholder="">

</section>

<section class="email"> 
    <label>Email:</label>
    <input type="text" placeholder="">

</section>

<section class="aantal"> 
    <label>Aantal:</label>
    <input type="number" placeholder="">

</section>

<section class="datum"> 
    <label>Datum:</label>
    <input type="date" placeholder="">
</section>

<section class="tijd"> 
    <label>Tijd:</label>
    <input type="time" placeholder="">
</section>

<section class="opmerkingen"> 
    <label>Eventueele opmerkingen:</label>
    <input type="text" placeholder="">

</section>

</section>

<button class="reservebtn" type="Button">Sumbit</button>

</section>



</body>


<?php
include "includes/footer.php";
?>
</html>