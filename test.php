<!DOCTYPE html>
<html>
    <head>
        <title>Baradif</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <section id="heading">
            <div class="container">
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">BARADIF</a></li>
                            <li><a href="#">Contes musicaux</a></li>
                            <li><a href="#">théâtre</a></li>
                            <li><a href="#">One Man Show</a></li>
                            <li><a href="#">CONTACT</a></li>
                            <li><a href="#">PUBLIC</a></li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        
        <section id="account">
            <?php
                
                    try{

                        $database = new PDO('mysql:host=localhost;dbname=baradif', 'root', 'toto');
                        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    }
                    catch (Exception $e){
                        die('ERROR: '.$e->getMessage());
                    }
            echo 'well played';

            ?>
        </section>
    </body>
</html>