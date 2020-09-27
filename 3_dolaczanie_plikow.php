<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
Początek pliku
<?php
$name='Anna';
include '.\3_pliki\file.php';
include_once '.\3_pliki\file.php1';
echo'Require:<br>';
require '.\3_pliki\file.php'
?>
Koniec pliku
    
</body>
</html>