<?php

function bonjour($jour)
{
    if ($jour) {
        echo 'bonjour';
    } else {
        echo 'bonsoir';
    }
}

$x = true;
echo bonjour($x);
