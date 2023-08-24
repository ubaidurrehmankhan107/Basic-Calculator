<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="calculator">
        <h2>Basic Calculator</h2>
        <form method="post" action="calculator.php">
            <input type="number" name="num1" placeholder="Enter number 1" required>
            <select name="operation">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="number" name="num2" placeholder="Enter number 2" required>
            <button type="submit">Calculate</button>
        </form>
        <div class="result">
            <?php include 'calculator.php'; ?>
        </div> 
    </div>
</body>
</html>
