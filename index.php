<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
      
        
        <meta charset="UTF-8">
        <title>STORE</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>

    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner-image">
           <div class="container">
               <center>
               <div id="banner_content">
                   <h1><b>Nous vendons le style de vie.</b></h1>
                   <p><b>40 % de réduction sur les marques premium.</b></p>
                   <a href="login.php" target="_blank"> <button class="btn btn-danger btn-lg active"><b>Achetez </b> </button></a>
                   
               </div>
                </center>
           </div>
       
       </div><br><br>
        
        
        
         <div class="container">
             <div class="row text-center">               
                 <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
                <image src="img/7.jpg"/>
             <div class="caption">
                 <h2>Montres</h2>
                 <p>Montres originales de la meilleure marque.</p>
             </div>
            </a>
                         </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
             <image src="img/1.jpg"/>
             <div class="caption">
                 <h2>Cameras</h2>
                 <p>Choisir Parmis les meilleures Montres dans le monde.</p>
             </div>
            </a>
                     </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
             <image src="img/8.jpg"/>
             <div class="caption">
                 <h2>Shirts</h2>
                 <p>Shirts de Luxe.</p>
             </div>
            </a>
                     </div>
        </div>
 
             </div>
         </div><br><br><br><br>

       <footer class="fo">
           <div class="container">
           <h2> contactez nous: </h2> </br>
    <p> GSM:  +212 696483999 &nbsp; &nbsp; Gmail: mohammed.adachi@uit.ac.ma </br>
  
     </p>
     
     <a href="https://www.instagram.com/club_gindustriel/"> <img src="img\contact.jpg" class="pull-right pull-top" width="300" style="margin-top: -100px;" /> </a>
           </div>

  <footer class="fo">
           <div class="container">
               <center>
                   <p>Copyright <small>&copy;</small> Fes  | All Rights Reserved</p>
</center>
           </div>     
       </footer>
    </body>
</html>
