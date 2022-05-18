<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>URZ</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">

        <?php
                    if(isset($_SESSION['useruid'])){
                        echo '<a href="/LoginSystem" class="navbar-brand">'.$_SESSION["useruid"].'</a>
                    ';
                    }else{
                        echo '  <a href="/LoginSystem" class="navbar-brand">URZ</a>
                        ';
                    }
                    ?>

          
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#funn" class="nav-link">How to have funn</a>
                    </li>
                    <?php
                    if(isset($_SESSION['useruid'])){
                        echo '   <li class="nav-item">
                        <a href="profile.php" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item">
                    <a href="includes/logout.inc.php" class="nav-link">Logout</a>
                </li>
                    ';
                    }else{
                        echo '   <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="signup.php" class="nav-link">Sign up</a>
                    </li>';
                    }
                    ?>

                 
                </ul>
            </div>
        </div>
    </nav>