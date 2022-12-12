<pre>
<?php
//1. Создайте массив arrRange и заполните его числами в промежутке [-50; 50] с шагом=8.
//Перемешайте элементы этого массива

$arrRange = range(-50, 50, 8);
shuffle($arrRange);
print_r($arrRange);

//2. Выведите элементы этого массива в строку через 
//« ** ».
print_r(implode("**", $arrRange,));

//4. Замените все отрицательные значения положительными
for ($i = 0; $i < count($arrRange); $i++) {
    if ($arrRange[$i] < 0) {
        $arrRange[$i] = $arrRange[$i] * -1;
    }
}
print_r($arrRange);

// //5. Создайте новый массив arrRandom и заполните его на 20 элементов случайными числами в промежутке [-5; 10].
$arrRandom = [];
for ($i = 0; $i < 20; $i++) {
    $arrRandom[] = mt_rand(-5, 10);
}

print_r($arrRandom);

//6. Определите количество значений в массиве arrRandom (количество повторений) 
$arrRandomUnc = array_unique($arrRandom);
print_r(count($arrRandomUnc));

//пределите сумму элементов массива arrRandom
print_r(array_sum($arrRandom));

//8. Определите произведение элементов массива arrange, кратных 3
$arrRangeMult = array_reduce($arrRange, fn ($carry, $item) => $item % 3 == 0 ? $carry *= $item : $carry, 1);
print_r($arrRangeMult);

//9. Объедините массивы arrRange и arrRandom двумя способами
$arrSum1 = $arrRange + $arrRandom;
$arrSum2 = array_merge($arrRange, $arrRandom);
//10. В массиве arrRandom удалите 2, 3 и 4 элементы
array_splice($arrRandom, 2, 3);
print_r($arrRandom);

// //11. В массиве arrRandom определите количество элементов, не превышающих его среднее значение
$arrRandomSr = array_sum($arrRandom) / count($arrRandom);
$arrRangeMenSr = array_filter($arrRandom, fn ($item) => $item <= $arrRandomSr);
print_r($arrRandomSr . "<br>");
print_r($arrRangeMenSr);

// //12. Добавьте в конец массива arrRandom элемент=1000 (2 способа)
$arrRandom[] = 1000;
array_push($arrRandom, 1000);
print_r($arrRandom);


$apple = "Черешня";
$graple = "Виноград";
$strawberry = "Земляника";
$pear = "Груша";


// //14. Сформируйте массив из переменных, представленных ниже
$arr1 = compact("apple", "graple", "strawberry", "pear");
print_r($arr1);
$arr2 = ["apple" => $apple, "graple" => $graple, "strawberry" => $strawberry, "pear" => $pear,];
print_r($arr2);

// //Выполните сортировку элементов массива по номеру дома в порядке возрастания.
$arr = [
    [
        "street" => "Гагарина",
        "house" => 7,
        "flat" => 303
    ],
    [
        "street" => "Елькина",
        "house" => 12,
        "flat" => 12
    ],
    [
        "street" => "Доватора",
        "house" => 113,
        "flat" => 24
    ],
];
usort($arr, "sortDom");

function sortDom($a, $b)
{
    if ($a["house"] > $b["house"]) {
        return  1;
    }
    if ($a["house"] == $b["house"]) {
        return  0;
    }
    if ($a["house"] < $b["house"]) {
        return -1;
    }
}

print_r($arr);

?>
</pre>