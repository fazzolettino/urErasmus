<!DOCTYPE html>
<html lang="en">

<head>

    <title>URErasmus | Home</title>
    <?php include_once VIEW_DIR . 'headerStart.php'?>
</head>

<body id="page-top" class="index">

<!-- Navigation -->
<?php include_once VIEW_DIR .'header.php'?>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="<?php echo IMG_DIR;?>logo.png" width="300" alt="">
                <div class="intro-text">
                    <span class="name"><span style="color:#2e2e2e">UR</span>Erasmus</span>
                    <hr class="star-light">
                    <span class="skills">Make it easier.</span>
                    <br>
                    <span class="skills">We have all you need for UR Erasmus in this page.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->

    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active"> <img src="<?php echo IMG_DIR;?>esnflyer.jpg" style="width:100%" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <p>ESN SALERNO</p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo DOMINIO_SITO;?>/categorie" role="button">Visit the website</a></p>
                </div>
            </div>
        </div>
        <div class="item"> <img src="<?php echo IMG_DIR;?>aegeeflyer 2.jpg" style="width:100%" data-src="" alt="Second    slide">
            <div class="container">
                <div class="carousel-caption">
                    <p>AEGEE SALERNO</p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo DOMINIO_SITO;?>/getAnnunci" role="button">Visit the website</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>

<!-- Footer -->
<?php include_once VIEW_DIR .'footer.php'?>

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
