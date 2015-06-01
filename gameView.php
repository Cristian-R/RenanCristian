<html lang="en">
    <head>
        <title>APPhub</title>
        <link rel="shortcut icon" href="IMG/APPhub2.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css"  rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css"  rel="stylesheet" href="css/bootstrap.theme.min.css">
        <link type="text/css"  rel="stylesheet" href="css/custom-style.css">
        <link href="jumbotron.css" rel="stylesheet">
    </head>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a  href="index.php" id='APP'><img src="IMG/APPhub2.png" class="img-rounded" alt="Logo" height="48" width="60" id='APP' ></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <form class="navbar-form navbar-right">
                </form>
            </div>
        </div>
    </nav>
    <div class="jumbotron" id="Jumbo2">
        <h1 id='H1'>Games</h1>
        <h4>Here you will see all the games APP Academy students have made</h4>
    </div>
    <div class="container">
    <hr>
    <a class="btn btn-success" href="Post-game.php">Post</a>
    </div>
    
    <?php
        require_once (__DIR__ . "/controller/login-verify.php");

        
        require_once (__DIR__ . "/view/header.php");

         
        require_once(__DIR__ . "/view/navigation.php");
       

        require_once (__DIR__ . "/controller/create-db.php");
        

        require_once (__DIR__ . "/view/footer.php");

        
        require_once (__DIR__ . "/controller/read-posts.php");
        ?>
    
</html>