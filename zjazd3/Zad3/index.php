<?php

function manageDirectory($path, $dirname, $operation = 'read')
{
    $fullPath = rtrim($path, '/') . '/' . $dirname;

    switch ($operation) {
        case 'create':
            if (!file_exists($fullPath)) {
                if (mkdir($fullPath, 0777, true)) {
                    echo "Katalog '$fullPath' został stworzony.";
                } else {
                    echo "Nie udało się stworzyć katalogu '$fullPath'.";
                }
            } else {
                echo "Katalog '$fullPath' już istnieje.";
            }
            break;

        case 'delete':
            if (file_exists($fullPath)) {
                if (is_dir($fullPath) && count(scandir($fullPath)) == 2) {
                    if (rmdir($fullPath)) {
                        echo "Katalog '$fullPath' został usunięty.";
                    } else {
                        echo "Nie udało się usunąć katalogu '$fullPath'.";
                    }
                } else {
                    echo "Katalog '$fullPath' nie jest pusty lub nie jest katalogiem.";
                }
            } else {
                echo "Katalog '$fullPath' nie istnieje.";
            }
            break;

        case 'read':
        default:
            if (file_exists($fullPath) && is_dir($fullPath)) {
                $files = scandir($fullPath);
                echo "Zawartość katalogu '$fullPath': <br>";
                foreach ($files as $file) {
                    if ($file != "." && $file != "..") {
                        echo $file . "<br>";
                    }
                }
            } else {
                echo "Katalog '$fullPath' nie istnieje lub nie jest katalogiem.";
            }
            break;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $path = $_POST['path'] ?? '';
    $dirname = $_POST['dirname'] ?? '';
    $operation = $_POST['operation'] ?? 'read';

    manageDirectory($path, $dirname, $operation);
}
?>