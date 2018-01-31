<!DOCTYPE html>
<html lang="en">

<head>
    <title>URErasmus | Categorie</title>
    <?php include_once VIEW_DIR . "headerStart.php"?>
</head>

<body id="page-top" class="index">

<!-- Navigation -->
<?php include_once VIEW_DIR . 'header.php'?>


<!-- Portfolio Grid Section -->
<section id="portfolio" style="margin-top: 10%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h2>It's not just study</h2>
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
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item">
                <a href="https://www.facebook.com/events/389091111511354/?acontext=%7B%22action_history%22%3A%22%5B%7B%5C%22surface%5C%22%3A%5C%22page%5C%22%2C%5C%22mechanism%5C%22%3A%5C%22page_upcoming_events_card%5C%22%2C%5C%22extra_data%5C%22%3A%5B%5D%7D%5D%22%2C%22has_source%22%3Atrue%7D" class="portfolio-link" data-toggle="modal">
                    <div align="center"><h4>Las Vegas Party</h4></div>
                    <img src="<?php echo DOMINIO_SITO;?>/img/Events/Las vegas.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item">
                <a href="<?php echo DOMINIO_SITO;?>/getAppunti/Chimica" class="portfolio-link" data-toggle="modal">
                    <div align="center"><h4>Wine & Nuts</h4></div>
                    <img src="<?php echo DOMINIO_SITO;?>/img/Events/chimica.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item">
                <a href="<?php echo DOMINIO_SITO;?>/getAppunti/Fisica" class="portfolio-link" data-toggle="modal">
                    <div align="center"><h4>Rome - ICE EVENT</h4></div>
                    <img src="<?php echo DOMINIO_SITO;?>/img/Events/fisica.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item">
                <a href="<?php echo DOMINIO_SITO;?>/getAppunti/Informatica" class="portfolio-link" data-toggle="modal">
                    <div align="center"><h4>TOSCANA TRAVELL</h4></div>
                    <img src="<?php echo DOMINIO_SITO;?>/img/Events/informatica.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item">
                <a href="<?php echo DOMINIO_SITO;?>/getAppunti/Matematica" class="portfolio-link" data-toggle="modal">
                    <div align="center"><h4>Matematica</h4></div>
                    <img src="<?php echo DOMINIO_SITO;?>/img/Events/matematica.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portfolio-item">
                <a href="<?php echo DOMINIO_SITO;?>/getAppunti/Scienze Ambientali" class="portfolio-link" data-toggle="modal">
                    <div align="center"><h4>Scienze Ambientali</h4></div>
                    <img src="<?php echo DOMINIO_SITO;?>/img/Events/scienze%20ambientali.png" class="img-responsive" alt="">
                </a>
            </div>
        </div>
    </div>
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

