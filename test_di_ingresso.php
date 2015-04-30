<?php

$risposta1=$_POST["risposta1"];
$risposta2=$_POST["risposta2"];
$risposta3=$_POST["risposta3"];
$risposta4=$_POST["risposta4"];
$risposta5=$_POST["risposta5"];


$punteggio=0;

 if ($risposta1=="c1"){
   ++$punteggio;
 }

if ($risposta2=="d2"){
 ++$punteggio;
}
if ($risposta3=="a3"){
 ++$punteggio;
}
if ($risposta4=="c4"){
 ++$punteggio;
}
if ($risposta5=="c5"){
 ++$punteggio;
}

if ($punteggio>0 and $punteggio<=2){
  echo "studia va!!";
}
if ($punteggio=3){
 echo "puoi fare di meglio.";
}
if ($punteggio>3 and $punteggio<=5){
 echo "Complimenti!!";
}


?>