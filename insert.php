
<form>
    nome:
    <input type="text" name="nome"/><br>
    tipologia:
    <input type="text" name="tipologia"/><br>
    <input type="submit" value="inserisci"/>
</form>





<?php
/*da questo file inserisco un record nuovo*/

$col="mysql:localhost;dbname=subacquea";

$db=new PDO($col,'root','2654274');
/*collegamento al database effettuato*/

/*ora comunichiamo con il db.*/

$nome=$_GET['nome'];
$tipologia=$_GET['tipologia'];

$sql=$db->exec("INSERT INTO `subacquea`.`attrezzatura`(`id`,`nome`,`tipologia`)VALUES (NULL,'".$nome."','".$tipologia."')");

echo"dato inserito";
echo$sql;

?>
<br><br><br>
<a href="select_update_delete.php">back</a>