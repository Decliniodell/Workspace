<html>
 <head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Teste PHP</title>
 </head>
 <body>
   <div class="title">
   <h1>
     PHP
   </h1>
   <p>
     TEST 2.0
   </p>
   </div>
   <div class="phptst">
 <?php
 echo "<p>Olá Mundo</p>";
 $nome = "joao";
 $numero = 6;
 $letra = 'G';
 $a = 2;
 $b = 3;
 $c = 4;
 $d = $a + $b;
 echo "$d";
 echo "</br>";
 $e = ($d + $a) * $b;
 echo "$e";
 echo "</br>";
 if ($a < 2) {
   echo "funfa";
 }else {
   echo "ainda funfa";
 }
 echo "</br>";
 if ($a > 1 && $b > 1) {
   echo "ok";
 }else {
   echo "ok ainda";
 }
 echo "</br>";
 switch($b) {
   case '1':
   echo "111";
   break;
   case '2':
   echo "222";
   break;
   case '3':
   echo "333";
   break;
 }
 echo "</br>";
 $number1 = 1;
  $number2 = 2;

  if($number2 > $number1) {
    $a = 'Número 2 é maior que número 1';
  } else {
    $b = 'Número 2 não é maior que número 1';
  }

  $ternario = ($number2 > $number1) ? 'Número 2 é maior que número 1' : 'Número 2 não é maior que número 1';

  echo $ternario; // Número 2 é maior que número 1
  echo "</br>";
  $estacao = array('Verao' => 'de 21 de dezembro a 21 de março', 'Outono' => 'de 21 de março a 21 de junho',
    'Inverno' => 'de 21 de junho a 23 de setembro', 'Primavera' => 'de 23 de setembro a 21 de dezembro');
  echo "A estação Verão foi: {$estacao['Verao']}";

  // A estação Verão foi: de 21 de dezembro a 21 de março
  echo "</br>";
  $ensino = 'EAD';
$formacao = array('PHP' => 'Desenvolvedor PHP', 'Infra' => 'SysAdmin Linux');

// Não concatenadas
echo "<p>No $ensino da DevMedia você se torna {$formacao['PHP']}";
echo " e pode se tornar também {$formacao['Infra']}.</p>";

// Concatenadas
echo '<p>No ' . $ensino . ' da DevMedia você se torna ' . $formacao['PHP'];
echo ' e pode se tornar também '. $formacao['Infra'] . '.</p>';
echo "</br>";
$temp = array(
    '2010' => array(
    'Outubro' => 25,
    'Novembro' => 23,
    'Dezembro' => 20),
    '2011' => array(
    'Outubro' => 26,
    'Novembro' => 22,
    'Dezembro' => 21),
    '2012' => array(
    'Outubro' => 27,
    'Novembro' => 28,
    'Dezembro' => 19)
  );

  echo "Dezembro de 2012 foi de: {$temp['2012']['Dezembro']} graus";
// Dezembro de 2012 foi de: 19 graus
echo "</br>";
$number1 = array(100, 101, 102);
  $number1[] = 103;
  $number2[] = 104;

  print_r($number1);
  echo '<hr/>';
  print_r($number2);
  echo "</br>";
  $cert = array('EAD' => 'Você terá um certificado ', 'PHP' => 'Linux');

  $cert['PHP'] = 'Zend';
  print_r($cert);
  echo "</br>";
  $num = 0;

 while($num < 10 ) {
   echo $num++;
 }
 echo "</br>";
 $cont = 2000;

 do{
   $dobro = $cont + $cont;
   echo "O dobro de $cont é $dobro";
   $cont++;
 } while ($cont <= 1999);
 echo "</br>";
 for($a = 1; $a <= 10; $a++){
  $cubo = $a * $a * $a;
  echo "O cubo de $a é $cubo<br />";
}
echo "</br>";
$ead = array('Aqui na DevMedia ', 'você se torna um ', 'desenvolvedor PHP');

  foreach($ead as $can){
    echo "$can";
  }
  echo "</br>";
  $temp = array('Outubro' => 27, 'Novembro' => 28, 'Dezembro' => 19);

foreach($temp as $chave => $valor) {
  echo "A temperatura média de $chave foi de $valor graus<br />";
}
echo "</br>";
echo "<hr/>"
?>
</div>
 </body>
</html>
