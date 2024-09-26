<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="../../static/styles/normalize.css">
<link rel="stylesheet" href="../../static/styles/styles.css">
<title><?php echo $greeting; ?></title>
</head>
<body>
<main>
<p>

<form method="post">        
input (1-50): <input type="text" name="num"/><br>  
<button type="submit">Enter</button>  
</form> 

<?php
function generatePyramid() {
    $number = 1;
    $n = $_POST['num'];

    if ($n > 50){
        echo 'masukkan angka 1-50';
    }
else
    for ($i = 1; $i <= $n; $i++) {
        $result = $number * $number;

        $spacing = str_repeat(' ', $n - $i);

        echo $spacing . "$number x $number = $result\n";

        $number = $number * 10 + 1; 
    }
}

echo "<pre>"; 
generatePyramid();
echo "</pre>";
?>

</p>
</main>
</body>
</html>
