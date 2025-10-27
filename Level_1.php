<?php 


//Task 1

$var_1 = [10,20,30,40,50];

for ($i=0; $i < count($var_1); $i++) { 
    echo $var_1[$i] . "\n";
}

/////////////

//Task 2

$var_2 = [10,20,30,40,50,60];

echo "Array Counter: " . count($var_2) . "\n";

unset($var_2[3]);

$var_2 = array_values($var_2);

echo "Array Counter After Item deleted: " . count($var_2) . "\n";


////////////



//Task 3

function hasTheChar($var_array, $character):bool{
    $count_items = count($var_array);
    $words_with_char = 0;
    foreach ($var_array as $item) {
        if (strpos($item, $character) !== false) {
            $words_with_char++;
            if ($words_with_char == $count_items) {
                echo "All the words have the character '$character'.\n";
                return true;
            }
        }
    }
    echo "Not all the words have the character '$character'.\n";
    return false;

}

hasTheChar(["apple", "banana", "grape"], "a"); 
hasTheChar(["apple", "banana", "grape"], "b"); 



////////////




//Task 4

$var_4 = ["name" => "Lucas", "email" => "lucas@gmail.com", "age" => 22, "food" => "Sushi"];

?>