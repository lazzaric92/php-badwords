<?php 
    $incipit = 'Quando il signor Bilbo Baggins di Casa Baggins annunziò che avrebbe presto festeggiato il suo centoundicesimo compleanno con una festa oltremodo fastosa, i commenti e i fermenti a Hobbiton si sprecarono. Bilbo era ricchissimo e alquanto stravagante e, fin dalla straordinaria sparizione, seguita dal ritorno inaspettato, era stato il prodigio della Contea. Le ricchezze riportate dai viaggi erano ormai diventate una leggenda locale e secondo la credenza popolare, inutilmente smentita dagli anziani, la Collina a Casa Baggins era piena di gallerie imbottite di tesori. E se questo non bastava a dargli fama, a stupire era il vigore inesausto. Il tempo passava, ma il signor Baggins non sembrava risentirne più di tanto. A novant’anni era più o meno come a cinquanta. A novantanove iniziarono a definirlo ben conservato: con immutato ci sarebbero andati più vicini. C’era chi scuoteva la testa convinto che il troppo stroppia; non sembrava giusto che qualcuno possedesse una giovinezza (manifestamente) perpetua e al tempo stesso una ricchezza (verosimilmente) inesauribile. “Toccherà scontarla,” dicevano. “Non è naturale e sarà fonte di guai”.';
    $badword = $_GET["badword"];
    $newIncipit = str_replace($badword, "***", $incipit);
    $_GET['badword'] = isset($_GET['badword']) ? $_GET['badword'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWord</title>
</head>
<body>
    <main>
        <h1>Il Signore degli Anelli</h1>
        <p> <?php echo $incipit ?> </p>
        <p>Characters count: <?php echo strlen($incipit) ?> </p>
        
        <br>
        <form action="./index.php" method="GET">
            <label for="badword">Choose a word:</label>
            <input type="text" name="badword" id="badword">
            <button type="submit">Ban that word!</button>
        </form>

        <br>
        <h2>Censored incipit</h2>
        <p> <?php echo $newIncipit ?> </p>
        <p>Characters count: <?php echo strlen($newIncipit) ?> </p>
    </main>
</body>
</html>