<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Check Your Prime Number Here </h2>
  <form method='post'>
enter the number:
<input type="text" name="fname">
=======
<form method='post'>
  enter a number<input type="text" name="fname">
>>>>>>> 7804228e499f0f1b5ca207b2d37d72c72d239a91

  <input type="submit" name="submit">
</form>
</body>
</html>


<?php
<<<<<<< HEAD

if(isset($_POST["submit"]))
{
  $b=$_POST["fname"];
  $c=0;
if($b==0 || $b==1)
{
  echo "Not Prime or Composite";
  exit();
};
for($i=2;$i<$b;$i++)
{
  if($b%$i==0)
  $c++;
break;
};
if($c==0){

  echo "$b prime number";
}
else{

  echo "$b not a prime number";
}
}
?>
=======
$b = $_POST["fname"];
$c = 0;
if ($_POST["submit"]) {
  if ($b == 0 || $b == 1) {
    echo "Not Prime or Composite";
    exit();
  } ;
  for ($i = 2; $i < $b; $i++) {
    if ($b % $i == 0) {
       $c++;
      break;
    }
  };
  if ($c == 0) {

    echo "$b prime number";
  } else {

    echo "$b not a prime number";
  }
} ?>
>>>>>>> 7804228e499f0f1b5ca207b2d37d72c72d239a91
