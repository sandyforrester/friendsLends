<?php
// Initialize the session
session_start();
require_once "config.php";
?>

<?php
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>

        <!--You will need to insert this link below in your 'head' to get the navbar to show--> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">

            body{ font: 14px sans-serif; text-align: center; }
        </style>
    </head>
    <body>

        <!--Paste this section below at the top of your 'body' section for the navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="SARAH'S CREATE ITEM PAGE">Create new item</a>
                <a class="nav-item nav-link" href="SOPHIA'S CONTACT PAGE">Contact</a>
                <a class="nav-item nav-link" href="mydashboard.php">My account dashboard</a>
                <a class="nav-item nav-link" href="logout.php">Log out</a>
            </div>
        </nav>

        <div class="page-header">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]) . '!'; ?></b></br>
                <h2>Welcome to your hub for borrowing and lending with your friends!</h2></br>
        </div>
        <?php
        $stmt = $pdo->prepare('SELECT * FROM Items WHERE active=TRUE');

        try {
            $stmt->execute($_GET);
        } catch (PDOException $e) {
            echo $e->getMessage();
            $error = $e->errorInfo();
            die();
        }
        $item = $stmt->fetchALL(PDO::FETCH_ASSOC);
        foreach ($item as $key => $value) {
            $picvar = $value['itempic'];
            $itemname = $value['headline'];
            $borrower = $value['borrower'];
            ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src=<?php $picvar; ?> alt="Item image">
                             <div class="card-body">
                            <h4 class="item-title"><a href="itemPageView.php?itemname=<?php echo $itemname ?>"><?php echo $itemname; ?></a></h4></br>
                                <?php
                                if ($borrower !== null) {
                                    echo "<p>On loan currently!</p>";
                                }
                                ?> 
                            <?php }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>