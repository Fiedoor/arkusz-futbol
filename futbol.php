<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </header>
    <div id="mecze">
        <?php
        //skrypt1
        ?>
    </div>
    <main>
        <div id='glowny'>
            <h2>Reprezentacja Polski</h2>
        </div>
        <div id='left'>
            <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy,3-pomocnicy,4-napastnicy):</p>
            <form action="futbol.php" method="post">
                <input type="number" name="numer">
                <input type="submit" value="Sprawdź">
            </form>
            <ul>
                <?php
                //skrypt2
                ?>
            </ul>
        </div>
        <div id='right'>
            <img src="zad1.png" alt="piłkarz">
            <p>Autor: Stanisław Fiedoruk 5J</p>
        </div>
    </main>
</body>

</html>