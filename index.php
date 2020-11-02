<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div class="container">
     
      <div class="row align-items-center">
        <div class="col">
          <h1>Alyssa Joanna Villanueva</h1>
        </div>
        <div class="col">
          <form class="" action="index.php" method="post">
            <h2>Calculator</h2>
            <p>Input first number:</p>
            <input type="text" name="num1" value="">
            <p>Input second number:</p>
            <input type="text" name="num2" value="">
            <p>
            <input type="submit" name="add" value="+">
            <input type="submit" name="min" value="-">
            <input type="submit" name="mul" value="*">
            <input type="submit" name="div" value="/">
            </p>
          </form>
        </div>
        <div class="col">
           <form class="" action="index.php" method="post">
              <h2>Find GCD</h2>
              <p>Input first number:</p>
              <input type="text" name="num1" value="">
              <p>Input second number:</p>
              <input type="text" name="num2" value="">
              <p>
              <input type="submit" name="submit" value="Submit">
              </p>
          </form>
        </div>
      </div>
  <!-- <div class="" style="width: 200px;"> -->
    <?php
      if (!empty($_POST)) {
        echo "The Answer is: ";
        if (isset($_POST['add'])) {
          echo $_POST['num1'] + $_POST['num2'];
        } else if (isset($_POST['min'])) {
          echo $_POST['num1'] - $_POST['num2'];
        } else if (isset($_POST['mul'])) {
          echo $_POST['num1'] * $_POST['num2'];
        } else if (isset($_POST['div'])) {
          echo $_POST['num1'] / $_POST['num2'];
        } else {
          $gcd = 1;
          for ($i=1; $i <= $_POST['num1'] && $i <= $_POST['num2'] ; $i++) {
            if($_POST['num1'] % $i == 0 && $_POST['num2'] % $i == 0)
              $gcd = $i;
          }
          echo $gcd;
        }
      }
    ?>
    <!-- </div> -->
</div>
  </body>
</html>
