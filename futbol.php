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
        $conn = mysqli_connect('localhost', 'root', '', 'egzamin');
        $q1 = "SELECT zespol1, zespol2,wynik,data_rozgrywki FROM rozgrywka WHERE zespol1='EVG'";
        $result = mysqli_query($conn, $q1);
        foreach ($result as $chunk) {
            echo '<div class="chunk">';
            echo "<h3>" . $chunk['zespol1'] . "-" . $chunk['zespol2'] . "</h3>";
            echo "<h4>" . $chunk['wynik'] . "</h4>";
            echo "<p> w dniu:" . $chunk['data_rozgrywki'] . "</p>";
            echo '</div>';
        }
        ?>
    </div>
    <div id='glowny'>
        <h2>Reprezentacja Polski</h2>
    </div>
    <main>
        <div id='left'>
            <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy,3-pomocnicy,4-napastnicy):</p>
            <form action="futbol.php" method="post">
                <input type="number" name="numer">
                <input type="submit" value="Sprawdź">
            </form>
            <ul>
                <?php
                $numer = $_POST['numer'];
                if (isset($_POST['numer'])) {
                    $q2 = "SELECT imie,nazwisko FROM zawodnik WHERE pozycja_id=$numer";
                    $result1 = mysqli_query($conn, $q2);
                    foreach ($result1 as $row) {
                        echo "<li>" . $row['imie'] . '&nbsp' . $row['nazwisko'] . "</li>";
                    }
                }
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