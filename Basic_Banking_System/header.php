<style>
    header{
        background-color: #929592;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;

    }
   /* Main navi */
    .main-nav {
         float: right;
         list-style: none;
         margin-bottom: 0.2%;
         margin-top: 0.8%;
    }

    .main-nav li {
        display: inline-block;
        margin-left: 40px;
    }

.main-nav li a:link,
.main-nav li a:visited {
    margin-top: 0.5%;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 150%;
    font-weight: 350;
    border-bottom: 2px solid transparent;
    -webkit-transition: border-bottom 0.2s;
    transition: border-bottom 0.2s;
}
.main-nav li a:hover,
.main-nav li a:active {
    border-bottom: 2px solid #bcffa3;
}

</style>

<header>
        <nav>
            <div class="row">
                <ul class="main-nav js--main-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="viewuser.php">View customer</a></li>
                    <li><a href="transfer.php">transfer money</a></li>
                    <li><a href="activity.php">recent activity</a></li>
                </ul>
                </div>
        </nav>    
</header>