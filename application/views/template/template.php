<?php

// Variabel untuk memanggil asset

$assets = base_url('template/assets/');
$dist =  base_url('template/crm/dist/');
$icons = base_url('template/assets/icons/');
include 'header.php'
?>

        <div class="page-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">

                

                         <?php include 'breadcrumb.php' ?> 
                         <div id="contents"><?= $contents ?></div>
                         
                <!-- End Right sidebar -->
                </div>
            <!-- End Container fluid  -->
        </div>
        <!-- End Page wrapper  -->

        <?php include 'footer.php' ?> 