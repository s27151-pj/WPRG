<?php

$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$words = explode(' ', $text);

foreach ($words as $key => $word) {
    $cleanWord = '';
    for ($i = 0; $i < strlen($word); $i++) {
        $char = $word[$i];
        if (!in_array($char, ['.', ',', '!', '?', ';', ':'])) {
            $cleanWord .= $char;
        }
    }
    if (!empty($cleanWord)) {
        $words[$key] = $cleanWord;
    } else {
        unset($words[$key]);
    }
}

$assocArray = [];
$count = count($words);
for ($i = 0; $i < $count - 1; $i += 2) {
    $assocArray[$words[$i]] = $words[$i + 1];
}

foreach ($assocArray as $key => $value) {
    echo $key . ": " . $value . "\n";
}

?>
