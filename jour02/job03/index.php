<?php

    for ($a = 0;$a <= 100;$a++){
        
        if ($a <= 20){
            echo '<i>'.$a.'</i><br>';
        }

        elseif($a == 42){
            echo 'La Platefome <br>';
        }
        
        elseif ($a >= 25 && $a <= 50){
            echo '<u>' .$a. '</u><br>';
        }

        else{
            echo $a.'<br>';
        }

    }