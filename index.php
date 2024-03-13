<?php

function determineSeason($month) {
    switch ($month) {
        case 12:
        case 1:
        case 2:
            $season = 'Зима';
            break;
        case 3:
        case 4:
        case 5:
            $season = 'Весна';
            break;
        case 6:
        case 7:
        case 8:
            $season = 'Лето';
            break;
        case 9:
        case 10:
        case 11:
            $season = 'Осень';
            break;
        default:
            $season = 'Неверный номер месяца';
    }

    return $season;
}

$monthNumber = 1;

if ($monthNumber >= 1 && $monthNumber <= 12) {
    $result = determineSeason($monthNumber);
    echo "Время года: $result";
} else {
    echo 'Неверный номер месяца. Введите число от 1 до 12.';
}

?>