<?php

function first_function(string $word): string
{
    return $word . " World!";
    
}
echo first_function("Hello ") , "<br>";

function second(): float
{
    return 123.30;
}


echo second();

function third(string $letter): array
{
    return ['A', 'B', $letter];
}

// Tähän tulee fourth()
function fourth(int $eka,int $toka): int
{
    return $eka + $toka;
}

