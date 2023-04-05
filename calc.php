<!-- calculator -->
<?php
$number1 = $_GET["number1"];
$number2 = $_GET["number2"];
$op = $_GET["op"];

if($op ===  "+"){
$result = $_GET["number1"] + $_GET["number1"];
}elseif($op ===  "-"){
    $result = $_GET["number1"] - $_GET["number1"];
}elseif($op ===  "*"){
    $result = $_GET["number1"] * $_GET["number1"];
}elseif($op ===  "/"){
    $result = $_GET["number1"] / $_GET["number1"];
}




?>
<body>
    <div class="container">
        <form action="calc.php" method="GET" class="form">
            <div>
                <label>Enter Number1:</label>
                <input type="number" id="num1" name="number1" class="form-control">
            </div>

            <div>
                <label>Enter Number2:</label>
                <input type="number" id="num2" name="number2" class="form-control">
            </div>
            <div>
                <label>condition : </label>
                <input type="text"  name="op" class="form-control">
            </div>
            <div>
                <br>
                <?php echo $result ?>
            </div>
            <br>
            <input type="submit">
</form>

</body>