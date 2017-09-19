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
        <?php include 'includes/header.php' ?>

        <div id="contact">
            <h2>CONTACT</h2>
            <div contact="contactform">
                <div class="form-group">
                    <label for="contactName" class="lab">Nom</label>
                    <input type="text" class="form-control int" id="contactName" placeholder="Prenom Nom">
                </div>
                <div class="form-group">
                    <label for="contactEmail" class="lab">Email</label>
                    <input type="email" class="form-control int" id="contactEmail" placeholder="mail@example.com">
                </div>
                <div class="form-group ">
                    <label for="contactText" class="lab">Message</label>
                    <textarea  class="form-control" id="message" placeholder="Description"></textarea> 
                </div>
                <button id="submessage" type="submit" class="btn btn-danger">Send Message</button>
            </div>
        </div>
    </body>
</html>