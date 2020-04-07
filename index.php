<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <label>Length Array 1: <input type="number" name="lengthArray1"></label>
    <label>Length Array 2: <input type="number" name="lengthArray2"></label>
    <input type="submit">
</form>
<?php
$lengthArray1 = $_GET['lengthArray1'];
$lengthArray2 = $_GET['lengthArray2'];
?>
<form method="post">
    <div>Array 1:
        <?php for ($i = 0; $i < $lengthArray1; $i++): ?>
            <?php echo 'Phan tu thu ' . ($i + 1) . ' la: ' ?><input type="number" name="value1[]">
        <?php endfor; ?>
    </div>
    <div>Array 2:
        <?php for ($i = 0; $i < $lengthArray2; $i++): ?>
            <?php echo 'Phan tu thu ' . ($i + 1) . ' la: ' ?><input type="number" name="value2[]">
        <?php endfor; ?>
    </div>
    <input type="submit">
</form>
<?php
$array1 = $_POST['value1'];
$array2 = $_POST['value2'];
$array3 = [];
for ($i = 0; $i < $lengthArray1; $i++) {
    $array3[$i] = $array1[$i];
}
for ($i = 0; $i < $lengthArray2; $i++) {
    $array3[$lengthArray1] = $array2[$i];
    $lengthArray1++;
}
echo 'Add Array1, Array2 = Array3: ' . implode(', ', $array3);
?>
</body>
</html>
