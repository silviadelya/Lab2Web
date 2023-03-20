<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>PHP Dasar</h1>
    <?php 
    echo "Perulangan 1 sampai 10 <br />"; 
    $i=1; 
    do { 
        echo "Perulangan ke: " . $i . '<br />'; 
        $i++; 
    } while ($i<=10); 
    ?>
</body>
</html>