<?php include 'pdo.php';
session_start();
include 'head.php';
include 'header.php'; ?>
<!DOCTYPE html>
<html>
<style>
   h3 {
  color: #ff5600;
  font-family: Lora,Oxygen, -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 1.5em;
  font-weight: bold;
  text-shadow: 1px 1px 1px #222;
  margin-top: 0;
  margin-bottom: 0.9;
  text-align:center;
  /line-height: .75;/
}
    </style>

<body>
<?php

if(isset($_SESSION["Ac"])){
    $val = $_SESSION["Ac"];
    session_unset();
    $sql = "SELECT * FROM transfer Where fan = '$val' ORDER BY Date DESC";
  
    $stmt = $pdo->query($sql);
      echo('<h3> Debited</h3>');
        echo('<table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Transaction Id</th>
                        <th scope="col"> Name</th>
                        <th scope="col"> Account Number</th>
                        <th scope="col">Amout Transferd</th>
                        <th scope="col">Time</th>
                    </tr>
                </thead><tbody>');
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo('<tr>
                <th scope="row">');
        echo(htmlentities($row['TransId']));
        echo('</th><td>');
        echo(htmlentities($row['lname']));
        echo('</td><td>');
        echo(htmlentities($row['lan']));
        echo('</td><td>');
        echo(htmlentities($row['amount']));
        echo('</td><td>');
        echo(htmlentities($row['Date']));
        echo('</td><td>');
        echo('</td></tr>');
    }
    echo('</tbody><table>'); 
    $sql = "SELECT * FROM transfer Where lan = '$val' ORDER BY Date DESC";
  
    $stmt = $pdo->query($sql);
    echo('<h3>Credited</h3>');
    echo('<table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Transaction Id</th>
                    <th scope="col"> Name</th>
                    <th scope="col"> Account Number</th>
                    <th scope="col">Amout Transferd</th>
                    <th scope="col">Time</th>
                </tr>
            </thead><tbody>');
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo('<tr>
            <th scope="row">');
    echo(htmlentities($row['TransId']));
    echo('</th><td>');
    echo(htmlentities($row['fname']));
    echo('</td><td>');
    echo(htmlentities($row['fan']));
    echo('</td><td>');
    echo(htmlentities($row['amount']));
    echo('</td><td>');
    echo(htmlentities($row['Date']));
    echo('</td><td>');
    echo('</td></tr>');
}
echo('</tbody><table>'); 
}
else{
    echo '<script>alert("Access Denaied");
          window.location.replace("index.php");
        </script>';
      return;
}

  ?>
	<?php require_once "tail.php" ?>
</body>
</html>