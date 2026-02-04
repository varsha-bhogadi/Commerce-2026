<?php
$day = 'monday';
switch ($day) {
    case 'sunday':
        $result = 'Joyful day';
        break;
    case 'monday':
        $result = 'Sad day';
        break;
    case 'tuesday':
        $result = 'routine day';
        break;
    case 'wednesday':
        $result = 'same as tuesday';
        break;
    case 'thursday':
        $result = 'waiting for friday';
        break;
    case 'friday':
        $result = 'exiting day';
        break;
    case 'saturday':
        $result = 'comfy day';
        break;
}
echo $result;