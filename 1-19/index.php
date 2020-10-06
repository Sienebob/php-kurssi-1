<?php

$users = [
   0=> ['id' => 99, 'name' => 'Mikko'],
   1=> ['id' => 63, 'name' => 'Saara'],
   2=> ['id' => 30, 'name' => 'Tiina'],
   3=> ['id' => 63, 'name' => 'Matti'],
   4=> ['id' => 2, 'name' => 'Alma'],
   5=> ['id' => 187, 'name' => 'Sami'],
   6=> ['id' => 56, 'name' => 'Tuula'],
];

function custom_sort($a,$b){
if($a ['id'] === $b['id']){

}
if($a ['id'] < $b['id']){
    
}
}
usort($users);