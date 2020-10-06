<?php

function generateNames(int $count, string $prefix = ""): array
{
    $firstNames = ['Mikko', 'Matti', 'Antti', 'Simo', 'Anna', 'Siiri', 'Mira', 'Jaana'];
    $lastNames  = ['Meikäläinen', 'Onnekas', 'Mallikas', 'Testaaja', 'Esimerkkinen'];

    if($count < 1 || $count > 20) {
        $count = 1;
    }

    if(strlen($prefix) >20)
    $prefix = "";
$result = [];

for ($i=0; $i < $count; $i++) 
{ 
    $first = $firstNames[rand(0, (count ($firstNames) - 1))];
    $last = $lastNames[rand(0, (count($lastNames) -1))];

    $result[] = $prefix . " " . $first . " " . $last;
    $result[] = sprintf("%s %s %s", $prefix,$first,$last);

}

return $result;
}
echo "<pre>";
print_r(generateNames(3, "Mister"));
"<br>";
print_r(generateNames(2, "Frau"));
echo "</pre>";