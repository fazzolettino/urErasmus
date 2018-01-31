<?php include_once BEANS_DIR . "Utente.php"; ?>


<!-- -->
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom affix-top">
    <div class="container">
        <div class="row"> 

            <!-- LOGO -->

            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <a class="navbar-brand" href="<?php echo DOMINIO_SITO . "/home"?>"><span style="color:#848484">UR</span>Erasmus</a>
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>

            <!-- SEARCHBAR -->

            <!--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 0.5%;margin-bottom:2%;">
                <div class="left">
                    <form action="<?php echo DOMINIO_SITO;?>/search" method="post">
                    <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <button type="button" class="btn btn-default dropdown-toggle"
                                    data-toggle="dropdown">
                                <span id="search_concept">Notes</span> <span class="caret"></span>
                            </button>
                            <ul id="list-option" class="dropdown-menu" role="menu">
                                <li><a>URUniversity</a></li>
                                <li><a>URApplication Form</a></li>
                                <li><a>Categorie</a></li>
                                <li><a>Tags</a></li>
                            </ul>
                        </div>
                        <input type="hidden" name="search_param" value="Appunti" id="search_param">
                        <input type="text" name="user_param" class="form-control"  placeholder="Search">
                        <span class="input-group-btn">
                                <button style="width: 100%" class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div> -->

            <!-- LINK -->

            <div class="">
                <div class="collapse navbar-collapse"
                     id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                            
                        <li class="page-scroll"><a href="<?php echo DOMINIO_SITO . "/getAnnunci";?>" ><span style="color:#848484">UR</span>University</a></li>
                        <li class="page-scroll"><a href="<?php echo DOMINIO_SITO . "/getAppunti";?>"><span style="color:#848484">UR</span>Events</a></li>                        
                            <?php if (isset($_SESSION['user'])){
                                $utente = new Utente(null, null, null, null, null);
                                $utente = unserialize($_SESSION['user']);
                                if (strcmp($utente->getId(), "admin") == 0){
                            ?> <!-- Es ADMIN-->
                            <li class="page-scroll"><a href="<?php echo DOMINIO_SITO . "/admin";?>"><span style="color:#848484">UR</span>Profile</a></li>
                        <?php  }else { ?> <!-- NO Es ADMIN-->
                            <li class="page-scroll"><a href="<?php echo DOMINIO_SITO . "/profiloUtente";?>"><span style="color:#848484">UR</span>Profile</a></li>
                        <?php } }?>
                        <li class="page-scroll"><a href="<?php echo DOMINIO_SITO ."/help";?>"><span style="color:#848484">UR</span>Help</a></li>
                        <li class="page-scroll">
                            <?php if(isset($_SESSION["user"])){?>
                            <a href="<?php echo DOMINIO_SITO. "/logout";?>"><span style="color:#848484">UR</span>Logout</a>
                        <?php }else{ ?>
                            <a href="<?php echo DOMINIO_SITO."/autenticazione";?>"><span style="color:#848484">UR</span>Login</a>
                        <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>


        </div>

</nav>
</body>

</html> 