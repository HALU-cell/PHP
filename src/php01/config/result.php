<?php
$labels = [
    "Aset" => "Ａセット",
    "Bset" => "Ｂセット",
    "Cset" => "Ｃセット"
];

$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print "私の名前は、" . $name;

$labels = htmlspecialchars($_POST['item'], ENT_QUOTES);
print "ご希望の商品は、" . $labels;

$itemQuantity = htmlspecialchars($_POST['itemQuantity'], ENT_QUOTES);
print "注文数は、" . $itemQuantity;