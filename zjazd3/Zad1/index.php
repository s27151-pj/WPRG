<?php
if (isset($_GET['birthdate']) && !empty($_GET['birthdate'])) {
    $birthdate = $_GET['birthdate'];
    echo "Data urodzenia: " . $birthdate . "<br>";

    $birthDate = new DateTime($birthdate);
    $today = new DateTime('now');
    $nextBirthday = new DateTime(date('Y') . '-' . $birthDate->format('m-d'));
    if ($nextBirthday < $today) {
        $nextBirthday->modify('+1 year');
    }

    function getBirthWeekday($date)
    {
        return $date->format('l');
    }

    function getAge($birthDate, $today)
    {
        return $birthDate->diff($today)->y;
    }

    function daysUntilBirthday($today, $nextBirthday)
    {
        return $today->diff($nextBirthday)->days;
    }

    echo "Dzień tygodnia: " . getBirthWeekday($birthDate) . "<br>";
    echo "Ukończone lata: " . getAge($birthDate, $today) . "<br>";
    echo "Dni do najbliższych urodzin: " . daysUntilBirthday($today, $nextBirthday) . "<br>";
} else {
    echo "Proszę podać datę urodzenia.";
}
?>