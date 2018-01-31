php if(!(isset($_SESSION['user']))){
    header("Location:".DOMINIO_SITO);
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>URErasmus | Insert Event</title>
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
                <h2>Insert Event</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form action="<?php echo DOMINIO_SITO;?>/insertAppunti" method="post" enctype="multipart/form-data">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="nome" name="nome" required data-validation-required-message="Inserisci un nome.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Categorie</label>
                            <input type="text" name="Categorie" placeholder="Categorie" disabled>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls">
                                <br>
                                <input id="mat" type="radio" name="categorie" value="Divertimento"/>
                                <label for="mat">Fun Events</label><br>

                                <input id="bio" type="radio" name="categorie" value="University"/>
                                <label for="bio">University Events</label><br>

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Description</label>
                                <textarea rows="2" class="form-control" placeholder="Descrizione" id="descrizione" name="Description" required data-validation-required-message="Inserisci una descrizione."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Scegli file</label>
                                <input type="file" placeholder="Nessun file scelto.." name="file">
                            </div>
                        </div>


                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12" style="float: right;">
                                <button type="reset" class="btn btn-danger btn-lg" style="float: right;">Cancel</button>
                                <button type="submit" class="btn btn-success btn-lg" style="float: right;">Insert</button>
                            </div>
                        </div>
                </form>
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

</body>
<script>

    <?php if(isset($_SESSION["toast-type"]) && isset($_SESSION["toast-message"])) {?>

    $(document).ready(function () {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        toastr["<?php echo $_SESSION["toast-type"];?>"]("<?php echo $_SESSION["toast-message"];?>")

    });


    <?php
    unset($_SESSION["toast-type"]);
    unset($_SESSION["toast-message"]);
    }?>

</script>

</html>

