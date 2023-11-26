<?php
$n = $_POST['nc'];
$x = $_POST['xc'];
function calc($x, $n) {
    $count = 0;
    for ($i = 0; $i < $n; $i++) {
        $count += pow($x - 1, $i + 1) / (($i + 1) * pow($x + 1, $i + 1));
    }
    return $count;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	</head>
	<body>	
        <form action="" method="post" class="form">
            <h1 class="form-title">Решение уравнения</h1>
            <div class="form-group">
                <input class="form-input" placeholder=" " type="text" name="nc" id="nc"/>
                <label class="form-label">N=</label>
            </div>
    
            <div class="form-group">
                <input class="form-input" placeholder=" " type="text" name="xc" id="xc"/>
                <label class="form-label">X=</label>
            </div>
    
            <input type="submit" name="submit" value="Ответ">
        </form>
        <?php 
        if (isset($_POST['submit'])){
            $res = calc($x, $n);
            echo $res;
        }
        ?>

	</body>
</html>