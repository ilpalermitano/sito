<?php
/*file dove scelgo di eliminare modificare o aggiungere un record */

$col="mysql:localhost;dbname=subacquea";

$db=new PDO($col,'root','2654274');
/*collegamento al database effettuato*/

/*ora comunichiamo con il db.*/

/*ora faccio comparire tutti i record presenti*/

echo "DATI PRESENTI NEL DATABASE:<BR><BR>";

foreach($db->query("SELECT * FROM `subacquea`.`attrezzatura`") as $row) {
    echo $row['id'].' - '.$row['nome'].' - '.$row['tipologia'];

    echo '<a href="delete.php?id='.$row['id'].'">CANCELLA </a>';

    echo '<a href="update.php?id='.$row['id'].'&nome='.$row['nome'].'&tipologia='.$row['tipologia'].'">UPDATE</a>';
    /*echo '<a href="update_form.php?IDuser='.$row['IDuser'].'&Username='.$row['Username'].'&Password='.$row['Password'].'&Email='.$row['Email'].'">UPDATE</a></td></tr>'*/
    echo"<br>";

}

echo'<br><br><a href="insert.php">INSERISCI UN NUOVO CAMPO </a>';
?>