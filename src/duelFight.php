<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)];
$indyWeapon = $weapons[rand(0,2)];

if ($indyWeapon == $weapons[0] && $opponentWeapon == $weapons[1] || $indyWeapon == $weapons[1] && $opponentWeapon == $weapons[2] || 
   $indyWeapon == $weapons[2] && $opponentWeapon == $weapons[0]){
    echo "Indy wins !";
}

elseif ($opponentWeapon ===  $indyWeapon) {
 echo "Draw !";
}

else {
    echo "The opponent wins !";
}

?>