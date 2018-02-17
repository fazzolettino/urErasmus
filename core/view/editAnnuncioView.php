<?php if(!(isset($_SESSION['user']))){
    header("Location:".DOMINIO_SITO);
}?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title> URErasmus | Add class</title>
    <?php include_once VIEW_DIR . "headerStart.php"?>

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<?php include_once VIEW_DIR . 'header.php'?>

<!-- Header -->
<section id="contact">
    <div class="container" style="margin-top: 10%;">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Edit class</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form action="<?php echo DOMINIO_SITO;?>/realEditAnnuncio?keyToEdit=<?php echo $annuncio->getKeyAnnuncio()?>" method="post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>University</label>
                            <input type="text" class="form-control" placeholder="<?php echo $annuncio->getTitolo() ?>" id="titolo" name="titolo" data-validation-required-message="Insert university">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Class</label>
                            <input type="text" class="form-control" placeholder="<?php echo $annuncio->getDescrizione() ?>" id="descrizione" name="descrizione" data-validation-required-message="Insert class"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Contact</label>
                            <input type="text" class="form-control" placeholder="<?php echo $annuncio->getContatto() ?>" id="contatto" name="contatto" data-validation-required-message="Insert contact">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12" style="float: right;">
                            <button type="reset" class="btn btn-danger btn-lg" style="float: right; margin-left: 1%;">Cancel</button>
                            <button type="submit" class="btn btn-success btn-lg" style="float: right;">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>






<!-- Footer -->
<?php include_once VIEW_DIR . 'footer.php'?>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>



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


</body>

</html>

