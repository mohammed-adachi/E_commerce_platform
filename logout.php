

<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
        <title>Lifestyle Store | Logout</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div>
              <?php
        include 'includes/header.php';
        ?>
        
            <br><br><br> <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>Vous avez été déconnecté. <a href="login.php">S'authetifier</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <?php
         include 'includes/footer.php';
         ?>
    </body>
</html>
