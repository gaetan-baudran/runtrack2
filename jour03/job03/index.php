<?php

// Nos variable '$str' et '$voy' avec un tableau pour notre variable '$voy'

$str = "I'm sorry Dave I'm afraid I can't do that";
$voy = array('a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'y', 'Y');

//  for(pour): Pour notre variable '$i' qui est le début de condition avec une valeur de 0 , ensuite notre condition ' isset($str[$i]) et la fin de la condition qui est pour l'incramentation '$i++'
for ($i = 0; isset($str[$i]); $i++) {

    // foreach(pour chaque): Pour chaque variable '$voy' dans le tableau on donne la valeur clé '$voyelle' (ex: a,A,e,E,i,I) 
    foreach ($voy as $voyelle)

        if ($str[$i] == $voyelle)
            echo $str[$i];
}
