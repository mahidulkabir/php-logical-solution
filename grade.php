<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade checking</title>
</head>
<body>
    <h2>Check Your Grade By Number</h2>
    <form action="<?PHP $_SERVER['PHP_SELF']?>" method="POST">
        <label for="grade">Provide Your Grade:</label>
        <input type="number" name="grade" id="grade"> <br>
        <input type="submit" value="submit" name="submit">
    </form>


<?php
// Function to determine the grade based on the score
if(isset($_POST['submit'])){
    $score= $_POST['grade'];
   function getGrade($score) {
    $grade = ""; // Initialize the grade variable

    // Use conditional statements to determine the grade
    if ($score >= 90) {
        $grade = "A";
    } elseif ($score >= 80) {
        $grade = "B";
    } elseif ($score >= 70) {
        $grade = "C";
    } elseif ($score >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    return $grade; // Return the grade
}



// Call the function to determine the grade
$result = getGrade($score);

// Display the result
echo "The grade for a score of $score is: $result"; 
};

?>


</body>
</html>

