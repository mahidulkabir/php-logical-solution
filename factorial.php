<html>  
<head>  
<title>Factorial Program using loop in PHP</title>  
</head>  
<body>  
<<<<<<< HEAD

=======
<?php 
?>
>>>>>>> 7804228e499f0f1b5ca207b2d37d72c72d239a91
<form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="submit" />  
</form>  

<?php   
    if (isset($_POST['submit'])) {
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "Factorial of $number:<br><br>";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
    }  
?>  
</body> 
</html>  