<?php include 'pdo.php'; ?>
<head>
        <style>
        <?php require_once("head.php"); ?>
        </style>
        <?php include 'header.php' ?>

        <title>Basic Banking System</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.0.2/bootstrap-social.min.css" integrity="sha512-JcW9wu2uMONZLxuh9gA5ZWxzDePxi70WbMFxGPlVkkMR9oOUbdnZbn685ulVdat0tSpLSNOVbKjGhnAUMS7H3w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<?php
    $sql = "SELECT * FROM transfer";
    $stmt = $pdo->query($sql);
    echo('<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Transfer Id</th>
                <th scope="col">Sender</th>
                <th scope="col">A/C No.</th>
                <th scope="col">Reciever</th>
                <th scope="col">A/C No.</th>
                <th scope="col">Amount</th>
                <th scope="col">Date</th>
                
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
    echo(htmlentities($row['lname']));
echo('</td><td>');
echo(htmlentities($row['lan']));
echo('</td><td>');
echo(htmlentities($row['amount']));
echo('</td><td>');
echo(htmlentities($row['Date']));
echo('</td><td>');
echo('</td><td>');
echo('</td></tr>');
}
echo('</tbody></table>');
?>
<?php include 'tail.php' ?>