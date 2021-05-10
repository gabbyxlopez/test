<?php
$cars = ["Tesla","Volvo","Toyota","Nissan"];
if(isset($_POST["cars"])){
    $selected = $_POST["cars"];
    echo $cars[$selected];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text">
    <select name="" id=""></select>
    <input type="color">
    <input type="file">
    <input type="checkbox" name="" id="">
    <input type="month"><br>
    <input type="year">
    <label for="cars">Cars</label>
    <select name="cars" id="cars">
       <?php
       
       for($i = 0; $i < count($cars); $i++){
        echo "<option value={$i}> {$cars[$i]} </option> ";
       }    
       ?>
    </select>
    <button>Try</button>
    </form>
    <?php

    function show(){
        echo "TEst";
    }
    ?>

</body>
</html>