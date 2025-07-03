<html>  
<head>  
<title>Checking Leap Year</title>  
</head>  
<body>  

<form method="post">  
    Enter the Year:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="submit" />  
</form>  

<?php   
    if (isset($_POST['submit'])) {
      
$year = $_POST['number']; 

// Check if the year is a leap year
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}
    }  
?>  
</body> 
</html>  
