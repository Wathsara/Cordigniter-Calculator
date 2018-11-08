<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<form action="Calculator/calculate" method="POST">
    <input type="number" step="0.001" name="firstNumber" autocomplete="off">
    <select name="operator" id="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number"  step="0.001" name="secondNumber" autocomplete="off">
    <input type="submit" name="submit" value="Calculate">
</form>
</body>
</html>
