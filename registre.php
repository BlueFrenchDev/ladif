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

        <div id="login">
            <h2>INSCRIPTION</h2>
         <div id="logform">
                <label for="Email">Adresse Mail</label>
                <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" placeholder="Enter email">
                <label for="userPassword">Password</label>
                <input type="password" class="form-control" id="userPassword" placeholder="Password">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
    </body>
</html>