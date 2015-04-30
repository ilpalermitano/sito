<?php

/* ` */


if(isset($_POST['update'])){

    $col="mysql:localhost;dbname=subacquea";

    $db=new PDO($col,'root','2654274');

    $id=$_GET['id'];/*valore id corretto*/
    $nomenuovo=$_POST["nome"];
    $tipologianuova =$_POST["tipologia"];





    $sql= $db->exec("UPDATE `subacquea`.`attrezzatura` SET `nome`='$nomenuovo',`tipologia`='$tipologianuova' WHERE `id`=$id");
    /*$sql= $db->exec("UPDATE `subacquea`.`attrezzatura` SET `nome`='$nomenuovo',`tipologia`='$nomenuovo' WHERE `id`=$id"); funzionante in modo completo*/

    /*$sql= $db->exec("UPDATE `subacquea`.`attrezzatura` SET `nome`='ciupa',`tipologia`='' WHERE `id`=$id");*/

    /*$sql= $db->exec("UPDATE `subacquea`.`attrezzatura` SET `nome`='ciupa',`tipologia`='capra' WHERE `id`=$id"); corretto*/

    /*$sql= $db->exec("UPDATE attrezzatura SET nome="."'".$nomenuovo."',tipologia="."'".$tipologianuova."', WHERE id=".$id); */
                                                           /*`nome`="."'".$marca."',`tipologia`="."'".$marca."',*/


 echo"record sostituito";




}
else {
    $id=$_GET['id'];
    $nomenuovo=$_GET['nome'];
    $tipologianuova=$_GET['tipologia'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Aggiornamento dato </title>

</head>
<body>
<form method="POST" action="<?php $_PHP_SELF ?>">
    <table>


        <tr>
            <td> nome</td>

            <td><input type="text" name="nome"> </td>
        </tr>
        <tr>
            <td> tipologia</td>
            <td><input type="text" name="tipologia"> </td>
        </tr>

        <tr>
            <td><input type="submit" name="update" value="update"></td>

        </tr>


    </table>
</form>
<?php
}
?>
<br><br>
<a href="select_update_delete.php">BACK</a>
</body>
</html>