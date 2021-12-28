
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
    altura : <input name="num1" type="number"><br><br>
    base : <input name="num2" type="number"><br><br>


     
    <br><br><input type="submit">
    </form>
    
</body>
</html>

<?php
//40----------------------------------------------
//Entrar com a base e a altura de um retângulo e imprimir a seguinte saída:
//Perímetro: xxx
//Área: xxx
/*$alt=$_POST["num1"];
$base=$_POST["num2"];

$perimetro=$alt+$alt+$base+$base;
$area=$base*$alt;

echo "<br> Perimetro ";
echo $perimetro. " m²";
echo "<br> Area ";
echo $area. " m";
*/
//39----------------------------------------------
//Entrar com um número no formato CDU e 
//imprimir invertido: UDC. (Exemplo: 123, sairá 321).
/*
$num=$_POST["num1"];

$num1=$num/100;  
$num2=($num/10)%10;
$num3=($num%10);
echo $num1."<br>";
echo $num2."<br>";
echo $num3."<br>";
echo (int)$num3.(int)$num2.(int)$num1;
*/

//38----------------------------------------------
//Entrar com quatro números e imprimir a média ponderada, 
//sabendo-se que os pesos são respectivamente: 1, 2, 3 e 4.
/*$num1=$_POST["num1"];//6,2 7,2 4,3 5,3
$num2=$_POST["num2"];
$num3=$_POST["num3"];
$num4=$_POST["num4"];
$media=($num1+$num2+$num3+$num4)/10;
echo $media;
*/

//37----------------------------------------------
//Ler nome, endereço e telefone e imprimi-los.
/*
$nome=$_POST["nome"];
$end=$_POST["endereco"];
$fone=$_POST["fone"];

echo  $nome. " " .$end." ".$fone;
*/
//36----------------------------------------------
//Ler um número inteiro e imprimir seu sucessor e seu antecessor.
/*$num=$_POST["numero"];

echo "<h1>"."Sucessor"."</h1>";
echo  "<h1>".($num+1)."</h1>";
echo "<h1>"."Numero digitado"."</h1>";
echo  "<h1>".$num."</h1>";
echo "<h1>"."Antecessor"."</h1>";
echo  "<h1>".($num-1)."</h1>";
*/
//35----------------------------------------------
//Criar um algoritmo com uma matriz 5×5 e imprima: 
//toda a matriz, a matriz gerada só com números ímpares 
//e outra só com números pares.
/*
$n1=array(
    array(1, 2, 3, 4, 5),
    array(2, 2, 3, 4, 5),
    array(3, 2, 3, 4, 5),
    array(4, 2, 3, 4, 5),
    array(5, 2, 3, 4, 5),
    );
$par=array();
$impar=array();    

    echo "<pre>";
    print($n1[0][0]." ".$n1[0][1]." ".$n1[0][2]." ".$n1[0][3]." ".$n1[0][4]."<br>".
          $n1[1][0]." ".$n1[1][1]." ".$n1[1][2]." ".$n1[1][3]." ".$n1[1][4]."<br>".
          $n1[2][0]." ".$n1[2][1]." ".$n1[2][2]." ".$n1[2][3]." ".$n1[2][4]."<br>".
          $n1[3][0]." ".$n1[3][1]." ".$n1[3][2]." ".$n1[3][3]." ".$n1[3][4]."<br>".
          $n1[4][0]." ".$n1[4][1]." ".$n1[4][2]." ".$n1[4][3]." ".$n1[4][4]);
    echo "</pre>";
    echo "Array Par";

foreach($n1 as $i => $ns1){
echo '<hr>'.$i." -/";
    if($ns1[0]%2==0){ $par=$ns1;
        print_r($par[0]);
    } 
    if($ns1[1]%2==0){$par=$ns1;
        print_r($par[1]); 
    } 
     if($ns1[2]%2==0){$par=$ns1;
        print_r($par[2]);     
    } 
    if($ns1[3]%2==0){$par=$ns1;
        print_r($par[3]);
    }  
    if($ns1[4]%2==0){ $par=$ns1;
        print_r($par[4]);
    } 
};
echo '<hr>'; 

echo "Array Impar";
foreach($n1 as $i => $ns1){
    echo '<hr>'.$i." -/";
        if($ns1[0]%2!==0){ $impar=$ns1;
            print_r($impar[0]);
        } 
        if($ns1[1]%2!==0){$impar=$ns1;
            print_r($impar[1]); 
        } 
         if($ns1[2]%2!==0){$impar=$ns1;
            print_r($impar[2]);     
        } 
        if($ns1[3]%2!==0){$impar=$ns1;
            print_r($impar[3]);
        }  
        if($ns1[4]%2!==0){ $impar=$ns1;
            print_r($impar[4]);
        } 
    };
*/
//34----------------------------------------------
//Criar um algoritmo com uma matriz 5×5 e escreva os 
//elementos da diagonal principal.
/*
$n1=array(
array(' 1 ', 22, 18, 1, 1),
array(2, ' 15 ', 13, 2, 1),
array(3,  5,  ' 2 ', 3, 1),
array(4, 17, 15, ' 4 ', 1),
array(5, 17, 15, 5, ' 1 '),
);

echo "<pre>";
print($n1[0][0].$n1[1][1].$n1[2][2].$n1[3][3].$n1[4][4]);
echo "</pre>";
*/
//33----------------------------------------------
//Criar 2 vetores com 10 números inteiros cada.
//Gerar e imprimir um vetor dos números não comuns aos vetores.
/*
$num1=array(1,5,3,7,12,8,2,10,3);
$num2=array(1,5,3,7,11,8,2,10,3);
$num3 = array();
echo "Elementos não comuns <br>";
for($i=0; $i<10; $i++) { 
    if($num1[$i] != $num2[$i]){
        $num3 = $num1[$i];
        print($num3 . " ");

        $num3 = $num2[$i];
        print($num3 . " ");
    }
}*/
//32----------------------------------------------
//Criar um vetor com 20 elementos inteiros. 
//Imprimir o maior e o menor, sem ordenar,
// o percentual de números pares e a média dos elementos do vetor.
/*
$num=array(1,5,3,5,1,58,6,5,3,8,1,2,56,50,63);
$n="0";
$x="0";
$mediaPar=0;
$mediaImpar=0;
foreach($num as $ns){
    if($ns%2==0){
       $n=$n+1;
       $mediaPar=$mediaPar+$ns;
       echo $ns." par"."<br>";
 
     }else{
       $x=$x+1;
       $mediaImpar=$mediaImpar+$ns;
       echo $ns." impar". "<br>";
     }
  } 
   $mediaPar=$mediaPar/$n;
   $mediaImpar=$mediaImpar/$n;
   $PorcentagemPar= ($n*100)/15;
   $PorcentagemImpar= ($x*100)/15;
   echo "<hr>";
echo "Maior numero ";
print_r($maior=max($num));
echo "<br>";
echo " <hr>";
echo "Menor numero ";
print_r($menor=min($num));
echo "<br>";
echo " <hr>";
echo " Total de numeros par ". $n;
echo "<br>";
echo  "Porcentagem Par ".$PorcentagemPar." %";
echo "<br>";
echo  "Media de Par ".$mediaPar;
echo " <hr>"; 
echo " Total de numeros impar ". $x;
echo "<br>";
echo  "Porcentagem Impar ".$PorcentagemImpar." %";
echo "<br>";
echo  "Media de Impar ". $mediaImpar;
*/
//31-----------------------------------------------
//Armazenar 15 números inteiros em um vetor e 
//imprimir uma mensagem contendo o número e 
//uma das mensagens: par ou ímpar.
/*$num=array(1,5,3,5,1,58,6,5,3,8,1,2,56,1,50,63);

foreach($num as $ns){
    if($ns%2==0){
      echo $ns." par"."<br>";
 
     }else{
        echo $ns." impar". "<br>";
 
     }
  } //  print_r();
*/

//30-----------------------------------------------
//Na usina de Angra dos Reis, os técnicos analisam a perda de massa 
//de um material radioativo. Sabendo-se que este perde 25% de sua massa
// a cada 30 segundos, criar um algoritmo que imprima o tempo necessário
// para que a massa desse material seja menor que 0.10.
/*$trintaSegundos = 25;
//30 segundos
$cem= $trintaSegundos * 4;
//60 minuto 100%

    $por=($cem*30)/$trintaSegundos;
    $por=$por/60;
    echo "Para que a massa desse material seja menor que 0.10 leva ". $por . " minutos para chegar "."<br>" ;
*/


//29-----------------------------------------------
//Chico tem 1,50m e cresce 2 centímetros por ano, 
//enquanto Juca tem 1,10m e cresce 3 centímetros por ano. 
//Construir um algoritmo que calcule e imprima 
//quantos anos serão necessários para que Juca seja maior que Chico.
/*
$chico=1.50;
$anoChico=0.02;
$juca=1.10;
$anoJuca=0.03;
$anos="";
//     110
for($i=$juca+$anoJuca; $i<=$chico; $i=$i+$anoJuca){
   $anos++;
   $chico=$chico+$anoChico;    
   //echo "Juca ".$i." Chico ".$chico." anos ".$anos."<br>";
      } if($i>$chico){
    echo "Juca ".$i." Chico ".$chico." anos ".$anos."<br>";
   }
//echo " Nessecario ".$anos." anos "."<br>";
*/


//28-----------------------------------------------
//Ler vários números e informar quantos números entre 100 e 200 foram digitados. Se o valor 0 for lido encerrar a execução.
/*
$n=array(10,5,100,400,252,150,3,0,9,5,3,2,5,1,50,5,2);
//print_r($n);

foreach($n as $ns){
   if($ns!=0){
       
       // echo $ns."<br>";
       if($ns >= 100 && $ns <= 200 ){
       $n=array($ns);    
        print_r("Foram digitados ". $ns ." números entre 100 e 200!");
        echo "<br>";
       
       }

    }else{
 
    echo  "Saiu ";    
    echo "<br>"; 
    }
 }   print_r("Foram digitados ". $ns ." números entre 100 e 200!");

*/
//27-----------------------------------------------
//Criar um algoritmo que entre com uma palavra e imprima conforme o exemplo
/*
$text=$_POST["text"];

for($i=1; $i<=5; $i++ ){
    for($x=1; $x<=$i; $x++ ){
    echo "SONHO ";
   }
   echo "<br>";
 }
*/
//26-----------------------------------------------
/*
$numero=$_POST["numero"];

for($i=1; $i<=10; $i++ ){
   $tabuada=$numero*$i;
   echo ($numero. " X ". $i ." = ". $tabuada ."<br>");
}
*/

//25-----------------------------------------------
//Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos.
    //declaração dos 3 vetores
  /*  $vetor=array(11,-1,2,-24,3,-3,4,-4,50,-5,6,-6,7,-44,8,-87,9,-8,10,-11);
    $pos=array();
    $neg=array();

    foreach($vetor as $vet){
        ($vet<0) ? $neg[]=$vet : $pos[]=$vet;
    }

    echo "<h3>São estes os vetores positivos</h3>";
    print_r($pos);
    echo "<h3>E estes os vetores negativos</h3>";

    print_r($neg);
    echo "<br />";

    $total = array_sum($pos);
    $count = count($neg);

    echo "<h3>Soma dos positivos: </h3>";
    print_r($total); // soma de valores positivos
    echo "<h3>Quantidade de negativos: </h3>";
    print_r($count); // quantidade de valores negativos

*/

//24-----------------------------------------------
/*
$numero=$_POST["numero"];
    for( $i=1;  $i<=$numero; $i++){
        echo " Sol "."<br>";
  
    } 
*/
//23-----------------------------------------------
/*
$numero=$_POST["numero"];
$produto=array($numero);
$produto=array_product(range( 1, $numero));
    for( $i=1;  $i<=$numero; $i++){
        echo $i;
  
    } echo"<br>";
echo"<pre>";
print_r ($produto);
echo"</pre>";
*/
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