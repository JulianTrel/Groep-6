<?php
include ("header.html");
?>

<main>
    <h1>Reservering</h1><br><br>
    <section class="form">
    <form action="yummy_reserveren.php" method="GET">
        <br>Voornaam<br>
        <input type="text" name="voornaam"><br>
        Tussenvoegsel<br>
        <input type="text" name="tussenvoegsel"><br>
        Achternaam<br>
        <input type="text" name="achternaam"><br>
        Telefoonnummer<br>
        <input type="text" name="telefoon"><br>
        E-mailadres<br>
        <input type="text" name="e-mail"><br>
        Aantal Personen<br>
        <input type="text" name="aantal"><br>
        Datum<br>
        <input type="text" name="datum"><br>
        Tijd<br>
        <input type="text" name="tijd"><br><br>
        <input type="submit" value="Bevestigen">
    </form>
    <?php
    
    ?>
    </section>
    <a href="#">Privacy Policy</a>
</main>
    <footer></footer>
    <script src="yummy.js"></script>
</body>
</html>