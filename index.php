<!DOCTYPE html>
<html>
    <head>
        <title>Baradif</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'includes/header.php'?>
        
        <section id="agen">
            <div id="headagend">
                <h2>AGENDA</h2>
            </div>
            <div id="agenda">
            <?php
            try{
                $database = new PDO('mysql:host=localhost;dbname=baradif', 'root', 'toto');
                $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (Exception $e){
                die('ERROR: '.$e->getMessage());
            }
            $res = $database->query('SELECT * FROM agenda');
            while ($row = $res->fetch())
            {
                echo '<div class="brown-divider"></div>';
                echo '<h3 class="title">'.$row['title'].'</h3>'.'<br>'."\n\t\t\t\t";
                echo '<p class="insider">'.$row['date'].' - '.$row['heure'].'<br>'.$row['salle'].' - '.$row['lieu'].'</p>'.'<br>'."\n\t\t\t\t";
            }
            ?>
            </div>
        </section>
        <section id="core">
            <div id="bara">
                <h2>BARADIF</h2>
                <h3>Production et diffusion de spectacles vivants</h3>
            </div>
            <div id="galerie">
                <div class="head">
                    <h2>GALERIE</h2>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="images/galerie1b.jpg" alt="First slide">
                            <div class="carousel-caption">
                                <h3>New York</h3>
                                <p>We love the Big Apple!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/galerie2b.jpg" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div id="video">
                <div class="head">
                    <h2>VIDÉOS</h2>
                </div>
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/OQNlg8TFEqI" frameborder="0" allowfullscreen></iframe>
            </div>
            <div id="actu">
                <?php
                try{

                    $database = new PDO('mysql:host=localhost;dbname=baradif', 'root', 'toto');
                }
                catch (Exception $e){
                    die('ERROR: '.$e->getMessage());
                }

                $res = $database->query('SELECT * FROM actualite ORDER BY id DESC LIMIT 3');

                $row = $res->fetch();
                echo '<div id="first"><h3 class="actutitle">'.$row['title'].'</h3><br><h4 id="actusubtilte">'.$row['subtitle'].'</h4></div>';
                $row = $res->fetch();
                echo '<div id="second"><h3 class="actutitle">'.$row['title'].'</h3><br><h4 id="actusubtilte">'.$row['subtitle'].'</h4></div>';
                $row = $res->fetch();
                echo '<div id="third"><h3 class="actutitle">'.$row['title'].'</h3><br><h4 id="actusubtilte">'.$row['subtitle'].'</h4></div>';
                ?>
            </div>
        </section>
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>