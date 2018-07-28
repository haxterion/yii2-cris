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
                                    <li class="breadcrumb-item"><a href="#">Guest Book</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Guest Book</h4>
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
                                                            <label for="field-1" class="control-label">Marketing</label>
                                                            <input type="text" class="form-control" id="field-1" placeholder="Mark" />
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
                                                        <div class="form-group no-margin">
                                                            <label for="field-7" class="control-label">Explanation</label>
                                                            <textarea class="form-control" id="field-7" placeholder="Write something about record" style="margin-top: 0px; margin-bottom: 0px; height: 137px;"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-3" class="control-label">Status</label>
                                                            <div class="card-body">   
                                <form class="mb-0" />
                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" />Introduction
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />Negotiation
                                        </label>
                                    </div>
                                    <div class="radio disabled">
                                        <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="" />Agreement
                                        </label>
                                    </div>

                                    <div class="radio disabled">
                                        <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4" disabled="" />Rejection
                                        </label>
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
                                <h4 class="mt-0 header-title">Record Of Order</h4>       
                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                        <td>
                                    <div class="button-items">
                                        <button type="button" class="btn btn-raised btn-success"><i class="ti-eye"></i></button>
                                        <button type="button" class="btn btn-raised btn-info"><a href="<?php echo Url::to(['cris/history']); ?>"><i class="mdi mdi-library"></i></a></button>
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