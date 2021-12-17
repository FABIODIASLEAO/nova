
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="soma" action="atividade1.php" method="post">
    nome do livro: <input name="livro" type="text"><br><br>
    <select name="usuario">
        <option value="1"> Professor </option>
        <option value="2"> Aluno </option> 
    </select>
    
    
    <br><br><input type="submit">
    </form>
    
</body>
</html>

<?php

//22-----------------------------------------------
/*
$livro=$_POST["livro"];
$usuario=$_POST["usuario"];
if($usuario==1){
echo "O livro é: ". $livro ."<br>"." Professor vc tem 10 dias para devolver o livro";

}else{
    echo "O livro é: ". $livro ."<br>"." Aluno vc tem 3 dias para devolver o livro";
}*/


//21-----------------------------------------------
/*
$mes=$_POST["valor1"];
switch ($mes) {
    case 1:
        echo "janeiro";
        break;
    case 2:
        echo "fevereito";
        break;
    case 3:
        echo "marco";
        break;
    case 4:
        echo "abril";
        break;
    case 5:
        echo "maio";
        break;
    case 6:
        echo "junho";
        break;
    case 7:
        echo "julho";
        break;
    case 8:
        echo "agosto";
        break;
    case 9:
        echo "setembro";
         break;
    case 10:
        echo "outubro";
        break;
    case 11;
        echo "novembro ";
        break;
    case 12:
        echo "desembro";
        break;
    default:
       echo "mes não existe";
       break;
    }
 */   
//20-----------------------------------------------
/*
$A=$_POST["valor1"];
$B=$_POST["valor2"];
$C=$_POST["valor3"];


if ( $A+$B>$C && $B+$C>$A && $C+$A>$B){
   echo('forma um triangulo' );
}else if($A+$B==$C && $A+$C==$B && $C+$B==$A){
   echo ( 'triangulo eqüilátero' );
}else if( $A+$B==$C && $A+$C==$B && $B+$C==!$A ){
   echo ( 'triangulo Isóscelos' );
}else if( $A+$B==!$C && $A+$C==!$B && $B+$C==!$A ){
echo ( 'triangulo Escaleno' );
}
*/
//19-----------------------------------------------
/*
$valor1=$_POST["valor1"];
$valor2=$_POST["valor2"];
$valor3=$_POST["valor3"];
$valores=array($valor1 , $valor2 , $valor3);
rsort($valores);
echo "<pre>";    
var_dump ($valores);
echo "</pre>";
print
*/
//18-----------------------------------------------
/*$valor=$_POST["valor"];
$idade=$_POST["idade"];
$sexo = $_POST["sexo"];
echo "<br>";
if($sexo==2 && $idade>=25) {
  echo "ACEITA" ."<br>";
} else{
    echo "NÃO ACEITA" ."<br>";
} */ 

//17------------------------------------------------
/*$valor=$_POST["valor"];
if(($valor % 10)==0 && ($valor % 5)==0 &&($valor % 2)==0) {
     echo "divisivel por 10 e por 5 e por 2". "<br>";    
 }else if(($valor % 5)==0 ){
    echo "divisivel por 5". "<br>";
 }else if(($valor % 2)==0 ){
    echo "divisivel por 2". "<br>";
 }else if(($valor % 2)==!0 && ($valor % 10)==!0 && ($valor % 5)==!0){
    echo "Não é divisivel por 10 e por 2 e por 5". "<br>";
 }*/

//16---------------------------------------------------
/*$valor=$_POST["valor"];
$valor2=$_POST["valor2"];
$soma= $valor + $valor2;
if($soma>20){
   $soma= $soma+8;
    echo $soma;    
}else if($soma<=20){
    $soma=$soma-5;
  echo $soma ;  
}*/
//15----------------------------------------------------
//$rest = substr($valor, $valor2 );
//echo $tamanhoString ." <br > ".$rest;
//echo substr($valor, $valor2);
/*for($i=0; $i<$tamanhoString; $i++){
      $novo=substr($valor, $i);
    echo "A palavra  ".$novo. " contem: ";
    echo strlen($novo)." caracteres". "<br>" ;
      
};*/

?>