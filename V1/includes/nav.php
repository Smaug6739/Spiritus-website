
<!--<link href="http://fr.allfont.net/allfont.css?fonts=pacifico" rel="stylesheet" type="text/css"/>-->
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#23272a">
    <a href="http://spiritus-tech.mon.world" class="navbar-brand d-flex flex-row align-items-center"><img class="baniere-nav"src="public/img/spiritus-baniere.png"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse stroke" id="navbarCollapse">
        <ul class="navbar-nav ml-auto" style="font-size:98%;">
        <li class="nav-item">
                <a class="nav-link text-white" href="http://spiritus-tech.mon.world">ACCUEIL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="https://discord.com/oauth2/authorize?client_id=689210215488684044&scope=bot&permissions=1946446974">ADD BOT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="http://spiritus-tech.mon.world/commandes.php">COMMANDES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="https://www.patreon.com/botspiritus?fan_landing=true">SOUTIENS</a>
            </li>
         
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <?php
            if(isset($_SESSION['user']) && $_SESSION['user_logged']) {
            if($_SESSION["avatar"]){ ?>
            <img class="mr-3" id="avatar_discord" src="<?=$_SESSION["avatar"]?>"/>
            <?php }else{ ?>
                <img class="mr-3" id="avatar_discord" width='64px'src="https://french-gaming-family.fr/public/img/default.png"/>
            <?php } ?>
                <a href="http://spiritus-tech.mon.world/logout.php" class="btn btn-outline-warning my-2 my-sm-0" type="submit">Déconnexion</a>  
            <?php
            } else { 
            ?>
            
                <a href="http://spiritus-tech.mon.world/login.php?action=login" id="login-btn" class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit">Connexion</a>                
            <?php   
            }
            ?>
            
        </form>
       
    </div>

</nav>