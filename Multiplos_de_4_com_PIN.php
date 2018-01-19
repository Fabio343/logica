<?php
// programa para multiplos de 4 exibindo palavra PIN
for($i=1 ; $i<101; $i++){
  if ($i % 4 ===0) {
    echo "PIN ";
  }else {
    echo ($i);
  }
}

?>
