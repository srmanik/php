/**
*
* Covert aassociative array into Ascii Table (Browser view)
*
**/
<style>
    span{
        padding: 5px;
        background: #A00;
    }
    .col1{
        background: #F0F;
    }
    .col2{
        background: #A0A;
    }
    .col3{
        background: #ddd;
    }
    .col4{
        background: #DEF;
    }
    .col5{
        background: #AA0;
    }
    .col6{
        background: #FA0;
    }
</style>
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
$asciiTable = "+----------+---------+---------+----------+<br>";
$asciiTable .= " | ";
foreach ($associativeArray as $arr) {
    $count = 1;
    foreach ($arr as $key => $value) {
        if (!in_array($key, $columns)) {
            $columns[] = $key;
            $asciiTable .= "<span class=col" . $count++ . ">" . $key . "</span> | ";
        }
    }
}

$asciiTable .= "<br>+----------+---------+---------+----------+<br><br>";
/*********************Content************************/
foreach ($associativeArray as $arr) {
    $asciiTable = $asciiTable . " | ";
    foreach ($columns as $key => $value) {
        $asciiTable .= "<span class=col" . ($key + 1) . ">" . $arr[$value] . "</span> | ";
    }
    $asciiTable .= " <br><br>";
}
$asciiTable .= "+----------+---------+---------+----------+<br>";

echo $asciiTable;
?>
