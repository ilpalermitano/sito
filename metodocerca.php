Inserisci un valore per cercare il record:<br>
<form method="post" action="<?php $_PHP_SELF ?>">
        <input name="ricerca">

        <input type="submit" name="invio"/>

</form>


<br><br><br>
<?php


/*
if(isset($ricerca)) {
    $col = "mysql:localhost;dbname=subacquea";

    $db = new PDO($col, 'root', '2654274');
    foreach ($db->query("SELECT * FROM `subacquea`.`attrezzatura` WHERE ") as $row) {
        echo $row['id'] . ' - ' . $row['nome'] . ' - ' . $row['tipologia'];

        echo '<a href="delete.php?id=' . $row['id'] . '">CANCELLA </a>';

        echo '<a href="update.php?id=' . $row['id'] . '&nome=' . $row['nome'] . '&tipologia=' . $row['tipologia'] . '">UPDATE</a>';

        echo "<br>";
    }
}
*/
if(isset($_POST['ricerca'])) {

    $ricerca = $_POST["ricerca"];
    $col = "mysql:localhost;dbname=subacquea";

    $db = new PDO($col, 'root', '2654274');

/*
    foreach ($db->query("SELECT * FROM `subacquea`.`attrezzatura` ORDER by `nome` LIKE '%$ricerca%'") as $row) {
        echo $row['id'] . ' - ' . $row['nome'] . ' - ' . $row['tipologia'];

        echo '<a href="delete.php?id=' . $row['id'] . '">CANCELLA </a>';

        echo '<a href="update.php?id=' . $row['id'] . '&nome=' . $row['nome'] . '&tipologia=' . $row['tipologia'] . '">UPDATE</a>';

        echo "<br>";
    }
*/
    ($db->query("SELECT * FROM `subacquea`.`attrezzatura` WHERE `nome` LIKE '%$ricerca%'") /*funzionante ma dentro una sola colonna*/
    foreach ($db->query("SELECT * FROM `subacquea`.`attrezzatura` WHERE `nome`='$ricerca'") as $row) {
        echo $row['id'] . ' - ' . $row['nome'] . ' - ' . $row['tipologia'];

        echo '<a href="delete.php?id=' . $row['id'] . '">CANCELLA </a>';

        echo '<a href="update.php?id=' . $row['id'] . '&nome=' . $row['nome'] . '&tipologia=' . $row['tipologia'] . '">UPDATE</a>';

        echo "<br>";
    }
    /* corretto ma mi restituisce un valore solo con l'intera parola*/

    /*foreach($db->query("SELECT `nome`,`tipologia`,`idattrezzatura` FROM `subacquea`.`attrezzatura`") as $row) {
        echo $row['idattrezzatura'];
    }

    /*SELECT * FROM `attrezzatura` WHERE `nome`='bombola'
    */



}else{$col = "mysql:localhost;dbname=subacquea";

    $db = new PDO($col, 'root', '2654274');
    foreach ($db->query("SELECT * FROM `subacquea`.`attrezzatura`") as $row) {
        echo $row['id'] . ' - ' . $row['nome'] . ' - ' . $row['tipologia'];

        echo '<a href="delete.php?id=' . $row['id'] . '">CANCELLA </a>';

        echo '<a href="update.php?id=' . $row['id'] . '&nome=' . $row['nome'] . '&tipologia=' . $row['tipologia'] . '">UPDATE</a>';

        echo "<br>";
    }
}
?>
<br/><br/><br/><br/>
Clicca per ottenere un valore ad muzzum:<br>
<form method="post" action="<?php $_PHP_SELF ?>">

    <input type="submit" name="invio"/>


</form>
<br/><br/><br/><br/>
<?php
if(isset($_POST['invio'])) {

    $col = "mysql:localhost;dbname=subacquea";

    $db = new PDO($col, 'root', '2654274');


    foreach ($db->query("SELECT `id`  FROM `subacquea`.`attrezzatura` ORDER by RAND() LIMIT 1") as $row) {
        echo $row['id'] . ' - ' . $row['nome'] . ' - ' . $row['tipologia'];

        echo '<a href="delete.php?id=' . $row['id'] . '">CANCELLA </a>';

        echo '<a href="update.php?id=' . $row['id'] . '&nome=' . $row['nome'] . '&tipologia=' . $row['tipologia'] . '">UPDATE</a>';

        echo "<br>";
    }
}
/*SELECT column FROM table
ORDER BY RAND()
LIMIT 1*/
?>



