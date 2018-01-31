
<!DOCTYPE html>
<html>

<head>
    <title>URErasmus | Admin</title>
    <?php include_once VIEW_DIR . "headerStart.php" ?>
    <?php  include_once MODEL_DIR . "UtenteManager.php"?>
</head>

<script type="text/javascript">
    function buttonCancellare (){

        //Cancellare $utenti[$i] de la database
    }
</script>

<body class="index" class="text-center">
<?php include_once VIEW_DIR . "header.php"?>
<section class="main-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h2>USERS</h2>
                <hr class="star-primary">
                <br>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item">
            <div class="text-center">
                    <div class="form-group col-xs-12 floating-label-form-group">
                        <h4>Username</h4>
                        <?php for($i=0; $i < count($utenti); $i++) { 
                            if (strcmp($utenti[$i]->getId(), 'admin')!=0) { ?>
                        <p><?php echo $utenti[$i]->getId();?></p>
                        <?php } }?>
                        <p class="help-block text-danger"></p>
                    </div>
            </div>
        </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item">


                    <div class="form-group col-xs-12 floating-label-form-group">
                        <h4>Email</h4>
                        <?php for($i=0; $i < count($utenti); $i++) {    
                            if (strcmp($utenti[$i]->getId(), 'admin')!=0) { ?>                   
                        <p><?php echo $utenti[$i]->getEmail();?></p>
                        <?php }} ?>
                        <p class="help-block text-danger"></p>
                    </div>
                
            </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item">
                    <div class="form-group col-xs-12 floating-label-form-group">
                        <h4>Città</h4>
                        <?php for($i=0; $i < count($utenti); $i++) { 
                            if (strcmp($utenti[$i]->getId(), 'admin')!=0) { ?>
                        <p><?php echo $utenti[$i]->getCitta();?>&nbsp&nbsp
                        <?php }} ?>
                        <p class="help-block text-danger"></p>

                    </div>
                
            </div>  
            </div>
        </div>
        <div class="row">
            <div class="text-center">
                <div class="row">
                    <br>
                    
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