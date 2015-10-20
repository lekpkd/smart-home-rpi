<?php

$pinGet = filter_input(INPUT_GET, "pin");
if ($pinGet != NULL) {
    $stateGet = filter_input(INPUT_GET, "state");
    if ($stateGet != NULL) {
        system("gpio mode " . $pinGet . " out");
        system("gpio write " . $pinGet . " " . $stateGet);
    }
    exec("gpio read " . $pinGet, $state);
    echo $state[0];
}