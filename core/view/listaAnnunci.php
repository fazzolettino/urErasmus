<?php include_once BEANS_DIR . "Annuncio.php"?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>URErasmus | Classes List</title>
    <?php include_once VIEW_DIR . "headerStart.php"?>

</head>


<body id="page-top" class="index">

<!-- Navigation -->
<?php  include_once VIEW_DIR ."header.php"; ?>
<!-- Header -->



<section class="main" id="contact">
    <div class="container" style="margin-top: 10%;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h2>Classes list</h2>
                <hr class="star-primary">
		 </ul>
	 </form>
</section>

            </div>
        </div>


        <?php
        if(isset($annunci)) {
            if(count($annunci)){
                for ($i = 0; $i < count($annunci); $i++) {
                    ?>
                    <div class="row">
                        <div class="col-lg-12 col-md 12- col-sm-12 col-xs-12 text-center">
                            <p><b> University:</b>&nbsp <?php echo $annunci[$i]->getTitolo(); ?></p>
                            <p><b> Class: </b>&nbsp <?php echo $annunci[$i]->getDescrizione(); ?></p>
                            <p></p>
                            <?php if (isset($_SESSION['user'])) { ?>
                                <p><b> Contact:</b>&nbsp <?php echo $annunci[$i]->getContatto(); ?></p>
                            <?php } ?>
                            <p><b> Date:</b>&nbsp <?php echo $annunci[$i]->getDataDiCaricamento(); ?></p>
                        </div>
                    </div>
                    <hr>

                    <?php
                }
            }else{ ?>
            <?php }
        }
        ?>
    </div>
</section>



<!-- Footer -->
<?php  include_once VIEW_DIR . "footer.php"; ?>

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