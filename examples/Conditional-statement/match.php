<?php
$month = 'may';
$result = match($month) {
    "january" => "Year starting",
    "february" => "Winter Slow downs",
    "march" => "Spring Comes in",
    "april" => "waiting for summer holidays",
    "may" => "Peak Summer",
    "june" => "Holidays ended",
    "july" => "rainy starts",
    "august" => "second half of year starts",
    "september" => "Rains going on",
    "october" => "Dussera",
    "november" => "winter starts slowly",
    "december" => "year is to ending",
};
echo $result;
