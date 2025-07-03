
<html>  
    <head>  
        <title>Factorial Program using loop in PHP</title>  
    </head>  
    <body>  
            <h2>Function to find the largest number among three numbers</h2>
            
            <form method="post">  
                Enter the First Number:<br>  
                <input type="number1" name="number1" id="number1">  <br>
                Enter the Second Number:<br>  
                <input type="number2" name="number2" id="number2"> <br>  
                Enter the Third Number:<br>  
                <input type="number3" name="number3" id="number3">  <br>
                <input type="submit" name="submit" value="submit" />  
                </form>  
 <?php 
if(isset($_POST['submit']) ) {
function findLargestNumber($a, $b, $c) {
    $largest = null;

    if ($a > $b && $a>$c) {
        $largest = $a;
    }

    if ($b > $a && $b > $c) {
        $largest = $b;
    }

	if ($c > $a && $c>$b) {
        $largest = $c;
    }

    return $largest; // Return the largest number
}

// Input numbers
$a = $_POST['number1'];
$b = $_POST['number2'];;
$c = $_POST['number3'];;

// Call the function to find the largest number
$result = findLargestNumber($a, $b, $c);

// Display the result
echo "The largest number among $a, $b, and $c is: $result";
};
?>
 
</body>
</html>