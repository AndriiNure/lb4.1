<?php

if ($_POST) {
    $inputArray1 = explode(',', $_POST['array1']);
    $inputArray2 = explode(',', $_POST['array2']);

    echo "<p>Массив перший без змін: " . implode(', ', $inputArray1) . "</p>";
    echo "<p>Массив другий без змін: " . implode(', ', $inputArray2) . "</p>";

    $uniqueArray1 = array_unique($inputArray1);
    $uniqueArray2 = array_unique($inputArray2);

    $duplicateCount = count($inputArray1) + count($inputArray2) - count($uniqueArray1) - count($uniqueArray2);

    $mergedArray = array_unique(array_merge($uniqueArray1, $uniqueArray2));

    $reversedArray = [];
    foreach ($mergedArray as $value) {
        array_unshift($reversedArray, $value);
    }

    echo "<p>Перший массив без дублікатів: " . implode(', ', $uniqueArray1) . "</p>";
    echo "<p>Другий массив без дублікатів: " . implode(', ', $uniqueArray2) . "</p>";
    echo "<p>Кількість дублікатів в двух массивах: $duplicateCount</p>";
    echo "<p>Об'єднані масиви без дублікатів: " . implode(', ', $mergedArray) . "</p>";
    echo "<p>Зворотній об'єднаний масив з двух: " . implode(', ', $reversedArray) . "</p>";
}

?>