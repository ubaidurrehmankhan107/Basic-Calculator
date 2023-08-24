<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic calculator</title>
</head>
<body>
    <?php 
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        switch ($operation) {
            case "add":
              $result = $num1 + $num2;
              break;
            case "subtract":
             $result = $num1 - $num2;
             break;
            case "multiply":
             $result = $num1 * $num2;
             break;
             case "divide":
                if ($num2 !=0){
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero";
                }
                break;
                default: 
                $result = "Invalid operation";
        }
        echo "Result: $result";
    }
    ?>
</body>
</html>