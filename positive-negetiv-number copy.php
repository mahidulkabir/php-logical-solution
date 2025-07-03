<!DOCTYPE html>
<html>
<head>
    <title>Separate Positive, Negative and Zero Numbers</title>
</head>
<body>

<h2>Enter numbers separated by commas</h2>

<form method="post">
    <input type="text" name="numbers" placeholder="e.g. 2, -1, -5, 9, 10, 0" required>
    <input type="submit" name="submit" >
</form>

<?php
if (isset($_POST['submit'])) {
    
    $input = trim($_POST['numbers']);

    $numberArray = explode(',', $input);
   //  $numberArray = array_map('trim', explode(',', $input));

    
    $positive = [];
    $negative = [];
    $zero = [];

    foreach ($numberArray as $num) {
        if (!is_numeric($num)) {
            echo "<p style='color:red;'>Invalid input detected: '$num' is not a number.</p>";
            continue;
        }

        $num = (float)$num;

        if ($num > 0) {
            $positive[] = $num;
        } elseif ($num < 0) {
            $negative[] = $num;
        } else {
            $zero[] = $num;
        }
    }

    echo "<h3>Results:</h3>";
    echo "Positive Numbers: ";
    print_r($positive);
    echo "<br>";

    echo "Negative Numbers: ";
    print_r($negative);
    echo "<br>";

    echo "Zero(s): ";
    print_r($zero);
}
?>

</body>
</html>
