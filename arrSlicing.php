

<?php
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$chunkedArray = array_chunk($array, 3); // Splitting the array into chunks of 3 elements each

$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);
$mergedArray = array_merge($array1, $array2);

echo "<h2>Original Array</h2>";
echo "<pre>";
print_r($array);
echo "</pre>";

echo "<h2>Array After Splitting (Into Chunks of 3)</h2>";
echo "<pre>";
print_r($chunkedArray);
echo "</pre>";

echo "<h2>Array After Merging Array1 and Array2</h2>";
echo "<pre>";
print_r($mergedArray);
echo "</pre>";
?>
