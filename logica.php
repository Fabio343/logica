<?php
// camel case
$nota = 5.0;

// operadores booleanos em php (extras)
// === verifica se é do mesmo tipo; !==

//operadores logicos
// && ||
// ideal o uso de paretenses devido a precendencia
// comparação  <=>

var_dump(2 <=> 1 );
var_dump(1 <=> 1 ). PHP_EOL;
var_dump(1 <=> 2 ). PHP_EOL;
$a= (true && false). PHP_EOL;
$b= (true and false). PHP_EOL;

var_dump($a);
var_dump($b);

var_dump(10 == "10");

if ($nota >= 5.0) {
  echo 'você foi aprovado';
}
  elseif ($nota >= 3) {
    echo 'recuperação';
}
  else{
    echo 'reprovado';
}

// laços for // aspas duplas imprime valor as simples apenas o texto literal

//exibir o nome 100 vezes
for($i=0 ; $i<100; $i++){
  echo "Fabio Carvalho de Souza";
  echo "\n";
}

// numeros de 1 a 100

for($i=0 ; $i<100; $i++){
  echo ($i+1);
  echo "\n";
}
?>
