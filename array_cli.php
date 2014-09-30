/**

Covert aassociative array into Ascii Table (Command Line view)
**/
<?php
$associativeArray = array(
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
    ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
    ),
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink'
    ),
);
/************Header****************/
$columns = array();
$asciiTable = "+----------+---------+---------+----------+\n";
$asciiTable .= " | ";
foreach ($associativeArray as $arr) {
    foreach ($arr as $key => $value) {
        if (!in_array($key, $columns)) {
            $columns[] = $key;
            $asciiTable .= $key . " | ";
        }
    }
    $asciiTable .= "\n";
}

$asciiTable .= "+----------+---------+---------+----------+\n";
/*********************Content************************/
foreach ($associativeArray as $arr) {
    $asciiTable = $asciiTable . " | ";
    foreach ($columns as $key => $value) {
        $asciiTable .= $arr[$value] . " | ";
    }
    $asciiTable .= " \n\n";
}
$asciiTable .= "+----------+---------+---------+----------+\n";

echo $asciiTable;
?>
