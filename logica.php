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
var_dump(1 <=> 1 );
var_dump(1 <=> 2 );
$a= (true && false);
$b= (true and false);

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
for($i=0 ; $i<11; $i++){
     echo ($i+1);

}
?>
