<?php


// '$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie." est notre varibale.
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// for (pour): pour notre variable '$i' qui est égale à 0 , On isset (Determine si notre variable est déclarer et différent de null) la variable '$str' pour clé '$i' ("Tous ces instants....") en augmentant (acrémenter) de 1 '($i++)'
for ($i = 0; isset($str[$i]); $i++) {

    // if(si): Si notre variable clé '$i' est modulo de 2 (divisible par lui même) , qui égale 0 ($i % 2 == 0).
    if ($i % 2 == 0) {
        // echo (affiche):: affiche la variable '$str' avec la clé '$i'  
        echo $str[$i];
    }
}
      
// Le résultat de cette algo devrait nous donner ' une lettre sur 2 ' dans notre variable .
