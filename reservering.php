<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dishdev.css">
</head>
<?php
include "includes/header.php";
?>

<body>

<section id="innerkleur">

<img src="images/Schermafbeelding 2026-03-27 202020.png" class="reserveimg" alt="reservering">

<section id="placeholders">

<section class="naam"> 
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

<button class="reservebtn">Sumbit</button>

</section>


</body>


<?php
include "includes/footer.php";
?>
</html>