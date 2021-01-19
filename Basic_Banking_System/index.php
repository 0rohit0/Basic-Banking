
<!DOCTYPE html>
<html lang="en">
	<head>
		<style>
			<?php include 'css/style.css'; ?>
			<?php require_once("head.php"); ?>
		</style>
		<title>Basic Banking System</title>
	</head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <ul class="main-nav js--main-nav">
                        <li><a href="viewuser.php">View Customer</a></li>
                        <li><a href="transfer.php">transfer money</a></li>
                        <li><a href="activity.php">recent activity</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>Fast & secure money transfer</h1>
                <a class="btn btn-full js--scroll-to-plans" href="viewuser.php">View Customers</a>
                <a class="btn btn-ghost js--scroll-to-start" href="transfer.php">Money Transfer</a>
            </div>
            
        </header>
        <?php include 'tail.php'; ?>
    </body>
</html>