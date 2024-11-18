<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html>
    <head>
       
     
                <meta charset="UTF-8">
        <title>Lifestyle Store | Cart</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>

    </head>
    <body style="padding-top: 50px;">

        
        <?php
        include 'includes/header.php';
        ?>
        
        <br><br><br>
        <div class="container">
               <div class="row row_style2">
                <div class="col-sm-10 col-sm-offset-1">
                    <table class="table table-striped">

                       
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Num de Produit</th>
                                    <th>Nom de Produit</th>
                                    <th>Prix</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>
                                              <td>" . $row["Name"] . "</td>
                                              <td>DH " . $row["Price"] . "</td>
                                              <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Annuler </a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>DH " . $sum . "</td>
                                          <td>
                                            <form action='https://www.sandbox.paypal.com/cgi-bin/webscr' method='post'>
                                                <input type='hidden' name='cmd' value='_xclick'>
                                                <input type='hidden' name='business' value='b-ye7wn1043628@business.example.com'>
                                                <input type='hidden' name='item_name' value='hat'>
                                                <input type='hidden' name='item_number' value='123'>
                                                <input type='hidden' name='amount' value='550'>
                                                <input type='hidden' name='first_name' value='John'>
                                                <input type='hidden' name='last_name' value='Doe'>
                                                <input type='hidden' name='address1' value='9 Elm Street'>
                                                <input type='hidden' name='address2' value='Apt 5'>
                                                <input type='hidden' name='city' value='Berwyn'>
                                                <input type='hidden' name='state' value='PA'>
                                                <input type='hidden' name='zip' value='19312'>
                                                <input type='hidden' name='night_phone_a' value='610'>
                                                <input type='hidden' name='night_phone_b' value='555'>
                                                <input type='hidden' name='night_phone_c' value='1234'>
                                                <input type='hidden' name='email' value='jdoe@zyzzyu.com'>

                                                <input type='image' name='submit'
                                                  src='https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif'
                                                  alt='PayPal - The safer, easier way to pay online'>
                                              </form></td>
                                          </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<center><h2><br>Ajouter des Produits!</h2><p><a href='products.php'>Cliker ici</a> Pour choisir Des Produits</p></center>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
             </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>