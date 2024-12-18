<?php

function luaspersegipanjang($panjang, $lebar) {
$luas = $panjang * $lebar;
return $luas;
}

$panjang = 70;
$lebar = 30;

$hasilluas = luaspersegipanjang($panjang, $lebar);

echo "luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah: $hasilluas";

?>
