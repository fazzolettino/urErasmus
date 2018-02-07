<!DOCTYPE html>
<html lang="en">

<head>
    <title>URErasmus | Subjects</title>
    <?php include_once VIEW_DIR . "headerStart.php"?>
     <?php  include_once MODEL_DIR . "AppuntiManager.php"?>

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<?php include_once VIEW_DIR . 'header.php'?>


<!-- Portfolio Grid Section -->
<section id="portfolio" style="margin-top: 10%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h2>All the subjects you need</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div style="margin:2%;float:right;">
                    <?php if(isset($_SESSION["user"])){ ?>
                        <a href="<?php echo DOMINIO_SITO;?>/inserisciAppunti">
                            
                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
       

                <div class="container">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item">
            <div class="text-center">
                    <div class="form-group col-xs-12 floating-label-form-group">
                        <h4>Nome</h4>
                        <?php for($i=0; $i < count($appunti); $i++) { ?>
                            <p><?php echo $appunti[$i]->getNome();?></p>
                        <?php } ?>
                        <p class="help-block text-danger"></p>
                    </div>
            </div>
        </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item">


                    <div class="form-group col-xs-12 floating-label-form-group">
                        <h4>Categoria</h4>
                        <?php for($i=0; $i < count($appunti); $i++) {    ?>
                        <p><?php echo $appunti[$i]->getCategoria();?></p>
                        <?php } ?>
                        <p class="help-block text-danger"></p>
                    </div>
                
            </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item">
                    <div class="form-group col-xs-12 floating-label-form-group">
                        <h4>Year</h4>
                        <?php for($i=0; $i < count($appunti); $i++) {  ?>
                        <p><?php echo $appunti[$i]->getAnnoCorso();?>&nbsp&nbsp
                        <?php } ?>
                        <p class="help-block text-danger"></p>

                    </div>
                
            </div>  
            </div>
        </div>


<?php  ?>

    </div

</section>



<!-- Footer -->
<?php include_once VIEW_DIR .'footer.php'?>


<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

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

