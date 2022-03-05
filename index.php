<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Aswinkl71
    </title>
</head>
<body>
    <form action="index.php" method="POST">
        <br>
        <br>
        <br>
        <div class="wrapper">
    <h3  class="typing-demo" >Hello iam aswin........</h3>
   
</div>
     <label >select operator</label>
      <select name = "dropdown" style="height:
    display: flex;
    align-items: center;
    justify-content: center;">
          <option ></option>
          <option value="Addition" >Addition +</option>
          <option value="Subtraction" >Subtraction -</option>
          <option value="Multiplication" >Multiplication *</option>
          <option value="Division" >Division /</option>
      </select><br><br>
      Enter the first number:<input type="number" name="firstnum" required><br><br>
      Enter the second number:<input type="number" name="secondnum" required><br><br>
      <input type="submit" value="Enter"/>
        
    <?php
  function number()
  {
      $num1 =$_POST['firstnum'];
      $num2 =$_POST['secondnum'];
      switch($_POST['dropdown'])
      {
          case "Addition";
          $sum =$num1+$num2;
          return $sum;
          break;
          case "Subtraction";
          $a =$num1-$num2;
          return $a;
          break;
          case "Multiplication";
          $b =$num1*$num2;
          return $b;
          break;
          case "Division";
          $c =$num1/$num2;
          return $c;
          break;
          default:
          echo "invalid operation";
      }
  }
     echo "<font color='blue'>results is  ==> " . number();
    ?><br>

    
</body>
</html>