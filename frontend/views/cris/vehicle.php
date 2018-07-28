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
                                    <li class="breadcrumb-item"><a href="#">Master</a></li>
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
                                <button type="button" position="center" class="btn btn-raised btn-primary" data-toggle="modal" data-target=".bd-example-modal-form">Add Record</button>
                                <div class="modal fade bd-example-modal-form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalform">New Record</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Lincense Plate</label>
                                                            <input type="text" class="form-control" id="field-1" placeholder="Enter Number and Character " />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-3" class="control-label">Vehicle Type</label>
                                                            <input type="text" class="form-control" id="field-3" placeholder="Vehicle Type" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-3" class="control-label">Vehicle Status</label>
                                                            <div class="card-body">   
                                <form class="mb-0" />
                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" />Internal
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />Eksternal
                                        </label>
                                    </div>
                                    <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-3" class="control-label">Partner</label>
                                                            <input type="text" class="form-control" id="field-3" placeholder="Enter your partner" />
                                                        </div>
                                                    </div>
                                                </div>   
                                </form>
                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                          
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Close Record</button>
                                                <button type="button" class="btn btn-raised btn-primary ml-2" id="alertify-notification" data-dismiss="modal">Send Record</button>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                                <center><h4 class="mt-0 header-title">Record Of Order</h4></center>       
                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>License Plate</th>
                                        <th>Vehicle Type</th>
                                        <th>Vehicle Status</th>
                                        <th>Partner<</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Cara Stevens</td>
                                        <td>Avanza</td>
                                        <td>Internal</td>
                                        <td>Mark</td>
                                        <td>
                                    <div class="button-items">
                                        <button type="button" class="btn btn-raised btn-success"><i class="ti-eye"></i></button>
                                        <button type="button" class="btn btn-raised btn-info"><i class="mdi mdi-lead-pencil"></i></button>
                                        <button type="button" class="btn btn-raised btn-danger"><i class="mdi mdi-delete"></i></button></div>  
                                        </td>
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