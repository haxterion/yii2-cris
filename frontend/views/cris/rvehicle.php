<?php
 use yii\helpers\Html;
 use yii\widgets\ActiveForm;
 use yii\helpers\Url;
 use frontend\assets\AppAsset;
?>

<html lang="en">

    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Navigation Bar-->
       <?= $this->render('header');

    ?>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group m-0 pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Sales Force</a></li>
                                    <li class="breadcrumb-item"><a href="#">Report</a></li>
                                    <li class="breadcrumb-item"><a href="#">Vehicle</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Vehicle</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <center><h4 class="mt-0 header-title">Record Of Order</h4></center>       
                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>License Plate</th>
                                        <th>Vehicle Type</th>
                                        <th>Vehicle Status</th>
                                        <th>Partner<</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Cara Stevens</td>
                                        <td>Avanza</td>
                                        <td>Internal</td>
                                        <td>Mark</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
       <!--  <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        &copy; 2018 CRIS by Mannatthemes.
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- End Footer -->


    </body>
</html>