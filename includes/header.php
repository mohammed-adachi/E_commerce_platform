<style>
.center-middle {
    position: absolute;
    top: 50%;
    left: 20%;
    font-size: 48px;
    letter-spacing: 2px;
    animation: slideIn 1s ease-out;
    font-family: 'Courier New', Courier, monospace;
    transform: translate(-50%, -50%);
    margin: 0;
}
</style>

 
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand"><h1 class="center-middle" style="color:MediumSeaGreen;" >market med </h1> </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(isset($_SESSION['email'])) {
                            ?>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><b> Panier</b></a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span><b> Paramétres</b></a></li>
                        <li><a href="logout_script.php"><span class="glyphicon glyphicon-log-in"></span><b>Fermer La session</b></a></li>                       
                        
                        <?php
                        }else {
                            ?>
                        <li><a href="signup.php" target="_blank"><span class="glyphicon glyphicon-user"></span><b> S'inscrire</b></a></li>
                        <li><a href="login.php" target="_blank"><span class="glyphicon glyphicon-log-in"></span><b> Connexion</b></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
       
        </nav>

    