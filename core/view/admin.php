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
                <h2>Profile</h2>
                <hr class="star-primary">
                <br>
            </div>
        </div>
        <div class="row">
            <div class="text-center">
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group">
                        <h4>Admin</h4>
                        
                        <p class="help-block text-danger"></p>
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
                                <a href="<?php echo DOMINIO_SITO;?>/inserisciEvento">
                                    <button id="my-annunci" class="btn btn-success btn-lg">
                                        Add event
                                    </button>
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="text-center">
                                <a href="<?php echo DOMINIO_SITO;?>/inserisciCorso">
                                    <button class="btn btn-success btn-lg">
                                        Add class
                                    </button>
                                </a>
                            </div>
                        </div>
                        <br
                        <div class="row">
                            <div class="text-center">
                                <a href="<?php echo DOMINIO_SITO;?>/Users">
                                    <button id="my-annunci" class="btn btn-success btn-lg">
                                        Users
                                    </button>
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="text-center">
                                <a href="<?php echo DOMINIO_SITO;?>/AdminEvents">
                                    <button  class="btn btn-success btn-lg">
                                        Edit events
                                    </button>
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class='row'>
                            <div class='text-center'>
                                <a href="<?php echo DOMINIO_SITO;?>/AdminClasses">
                                    <button class="btn btn-success btn-lg">
                                        Edit classes
                                    </button>
                                </a>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php include_once VIEW_DIR . "footer.php"?>
</body>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo STYLE_DIR;?>vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="<?php echo STYLE_DIR;?>js/jqBootstrapValidation.js"></script>

<!-- Theme JavaScript -->
<script src="<?php echo STYLE_DIR;?>js/freelancer.min.js"></script>

<!--DropDown menu PrivacyUser-->
<script src="<?php echo STYLE_DIR;?>js/privacyUser.js"></script>

</html>