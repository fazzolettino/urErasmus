<!DOCTYPE html>
<html>

<head>
    <title>URErasmus | Admin</title>
    <?php include_once VIEW_DIR . "headerStart.php"?>
</head>

<body class="index" class="text-center">
<?php include_once VIEW_DIR . "header.php"?>
<section class="main-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h2>Profilo</h2>
                <hr class="star-primary">
                <br>
            </div>
        </div>
        <div class="row">
            <div class="text-center">
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group">
                        <h4>Username</h4>
                        <p><?php echo $user->getId();?></p>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group">
                        <h4>Email</h4>
                        <p><?php echo $user->getEmail();?></p>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group">
                        <a href="<?php echo DOMINIO_SITO;?>/modificaProfiloUtente">
                            <button class="btn btn-success btn-lg">
                                Modify Profile
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="text-center">
                <div class="row">
                    <br>
                    <div class="text-center">
                        <div class="row">
                            <div class="text-center">
                                <a href="<?php echo DOMINIO_SITO;?>/myAnnunci">
                                    <button id="my-annunci" class="btn btn-success btn-lg">
                                        My annunci
                                    </button>
                                </a>
                            </div>
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="text-center">
                                <a href="<?php echo DOMINIO_SITO;?>/inserisciAnnuncio">
                                    <button class="btn btn-success btn-lg">
                                        Add new University
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php include_once VIEW_DIR . "footer.php"?>
</body>

</html>