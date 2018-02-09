<!DOCTYPE html>
<html lang="en">

<head>
    <title>URErasmus | Subjects</title>
    <?php include_once VIEW_DIR . "headerStart.php"?>
     <?php  include_once MODEL_DIR . "AppuntiManager.php"?>

</head>


<style>

    th{
        font-size: x-large;
        padding-right: 4%;
        padding-top: 1%;
    }

    .tbl{
        font-size: xx-large;
    }

</style>

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
       


                    <div class="row">
                            <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-border-1 col-xs-10">
                                <table>
                                    <tr>
                                        <th class="tbl">Nome</th>
                                        <th class="tbl">Categoria</th>
                                        <th class="tbl">Year</th>
                                    </tr>

                                    <?php

                                    for($i = 0; $i < count($appunti); $i++) {
                                        ?>


                                        <tr>
                                            <th><?php echo $appunti[$i]->getNome()?></th>
                                            <th><?php echo $appunti[$i]->getCategoria()?></th>
                                            <th><?php echo $appunti[$i]->getAnnoCorso()?></th>
                                            <th><a href="<?php echo DOMINIO_SITO. "/removeAppunti?keyToEdit=" . $appunti[$i]->getKeyCorsi();?>"><i class="fa fa-edit" style="font-size: 150%"></i></a></th>
                                            <th><a href="<?php echo DOMINIO_SITO. "/removeAppunti?keyToDelete=" . $appunti[$i]->getKeyCorsi();?>"><i class="fa fa-times" style="font-size: 150%; color: red"></i></a></th>
                                        </tr>

                                        <?php
                                    }
                                    ?>

                                </table>
                            </div>




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

