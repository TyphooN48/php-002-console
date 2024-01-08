<?php
echo "Ввведи первый аргумент:\n";

do {
    $var1 = trim(fgets(STDIN));

    if (!ctype_digit($var1)) {
        fwrite(STDERR, "Ранее введённый аргумент не является целым числом!\n");
        echo "Ввведи первый аргумент повторно:\n";
    }

} while (!ctype_digit($var1));

echo "Ввведи второй аргумент\n";

do {
    $var2 = trim(fgets(STDIN));

    if (!ctype_digit($var2)) {
        fwrite(STDERR, "Ранее введённый аргумент не является целым числом!\n");
        echo "Ввведи второй аргумент повторно:\n";
    }

    if ((int)$var2 === 0) {
        fwrite(STDERR, "Аргумент не должен быть равен нулю!\n");
        echo "Ввведи второй аргумент повторно:\n";
        $var2 = trim(fgets(STDIN));
    }

} while (!ctype_digit($var2) && ((int)$var2 === 0));

echo "Результат деления первого аргумента на второй: " . $var1 / $var2 . PHP_EOL;