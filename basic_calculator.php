<!DOCTYPE html>


<?php
$first_number =  $_POST['first_number'];
$second_number = $_POST['second_number'];
$operator =      $_POST['operator'];
$result = '';
if (is_numeric($first_number) && is_numeric($second_number)) {
    switch ($operator) {
        case "+":
           $result = $first_number + $second_number;
            break;
        case "-":
           $result = $first_number - $second_number;
            break;
        case "*":
            $result = $first_number * $second_number;
            break;
        case "/":
            $result = $first_number / $second_number;
    }
}

?>

<body>
    <h1>BASIC CALCULATOR</h1>
    <form action="" method="post" >
        <p>
            <b>First Number</b> <input type="number" name="first_number" id="first_number" required="required" value="<?php echo $first_num; ?>" /> 
        </p>
        <p>
            <b>Second Number</b> <input type="number" name="second_number" id="second_number" required="required" value="<?php echo $second_num; ?>" /> 
        </p>
        <input type="submit" name="operator" value="+" />
        <input type="submit" name="operator" value="-" />
        <input type="submit" name="operator" value="*" />
        <input type="submit" name="operator" value="/" />
        <p>
            <b>Result</b> <input readonly="readonly" name="result" value="<?php echo $result; ?>"> 
        </p>
        
    </form>
    
</body>
</html>