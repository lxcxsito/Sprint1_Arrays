<?php


//Task 1

$var_1 = [10, 20, 30, 40, 50];

for ($i = 0; $i < count($var_1); $i++) {
    echo $var_1[$i] . "\n";
}

/////////////

//Task 2

$var_2 = [10, 20, 30, 40, 50, 60];

echo "Array Counter: " . count($var_2) . "\n";

unset($var_2[3]);

$var_2 = array_values($var_2);

echo "Array Counter After Item deleted: " . count($var_2) . "\n";


////////////



//Task 3

function hasTheChar($var_array, $character): bool
{
    $count_items = count($var_array);
    $words_with_char = 0;
    foreach ($var_array as $item) {
        if (strpos($item, $character) === false) {
            return false;
        }
    }
    return true;
}

echo hasTheChar(["apple", "banana", "grape"], "a") ? "true" : "false";
echo "\n";
echo hasTheChar(["apple", "banana", "grape"], "b") ? "true" : "false";



////////////




//Task 4

$var_4 = ["name" => "Lucas", "email" => "lucas@gmail.com", "age" => 22, "food" => "Sushi"];

?>