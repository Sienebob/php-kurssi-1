<?php
$rows = file(__DIR__ . '/maakunnat.txt');

//print_r($rows);
//var_dump($rows); 



foreach ($rows as $row)
    {
        $parts = explode (';' , $row);

        $list [$parts[0] ] = intval($parts[1]);

    }

arsort($list);

$text = "";
foreach($list as $maakunta => $vakiluku)
    {
        if ($vakiluku %2 !== 0)
            {
                $text .= "$maakunta;$vakiluku\n";
            }
    }

file_put_contents(__DIR__ . '/maakunta_vastaus.txt', $text);

//var_dump ($text);