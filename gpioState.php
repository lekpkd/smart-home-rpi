<?php

/*
 *  Create by Khamlek HOMSOMBATH
 *  VTE Maker Club
 *  Email: khamlek.hsb@gmail.com
 *  facebook: https://facebook.com/lekpkd
 */
header("Content-Type: application/json");
$pins = array(0, 1, 2, 3, 4, 5, 6);
$pinsState = array();
for ($i = 0; $i < sizeof($pins); $i++) {
    $state = array();
    system("gpio mode " . $pins[$i] . " out");
    exec("gpio read " . $pins[$i], $state);
    $pinsState[$pins[$i]] = ($state[0] == 1);
}
echo json_encode($pinsState);
