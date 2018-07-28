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
                                    <li class="breadcrumb-item"><a href="#">History of Order</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">History of Order</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <center><h4 class="mt-0 header-title">Data of customer</h4></center>
                                <form class="mb-0" />
                                    <div class="form-group pt-0">
                                        <h6 class="control-label text-muted">Name</h6>
                                        <div class="form-group">
                                    <label for="exampleInputEmail1" class="bmd-label-floating ">Joshua</label>
                                        </div>
                                    </div>
                                    <div class="form-group pt-0">
                                        <h6 class="control-label text-muted">Address</h6>
                                        <div class="form-group">
                                    <label class="bmd-label-floating ">Sudirman Street 45B</label>
                                        </div>
                                    </div>
                                    <div class="form-group pt-0">
                                        <h6 class="control-label text-muted">Number phone</h6>
                                        <div class="form-group">
                                    <label class="bmd-label-floating ">081255478655</label>
                                        </div>
                                    </div>
                                    <div class="form-group pt-0">
                                        <h6 class="control-label text-muted">Vehicle Type</h6>
                                        <div class="form-group">
                                    <label class="bmd-label-floating ">Avanza</label>
                                        </div>
                                    </div>  
                                    <button type="submit" class="btn btn-primary btn-raised mb-0">Update</button> 
                                </form>    
                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-xl-8">
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
                                <center><h4 class="mt-0 header-title"><b>Record Of Order</b></h4></center>
                                <table class="table mb-0">
                                        <thead>
                                            <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Marketing</th>
                                            <th scope="col">Vehicle Type</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Explanation</th>
                                            <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-primary">
                                                <th scope="row">1</th>
                                                <td class="">2012/03/29</td>
                                                <td class="">Mark</td>
                                                <td class="">Avanza</td>
                                                <td class=""> IDR 450000</td>
                                                <td class="">Customer order our vechicle</td>
                                                <td class="">Intro</td>
                                            </tr>
                                            <tr class="">
                                            <th scope="row">2</th>
                                                <td class="">2012/03/29</td>
                                                <td class="">Mark</td>
                                                <td class="">Avanza</td>
                                                <td class="">IDR 450000</td>
                                                <td class="">Customer order our vechicle</td>
                                                <td class="">Intro</td>
                                            </tr>
                                            <tr class="">
                                            <th scope="row">3</th>
                                                <td class="">2012/03/29</td>
                                                <td class="">Mark</td>
                                                <td class="">Avanza</td>
                                                <td class="">IDR 450000</td>
                                                <td class="">Customer order our vechicle</td>
                                                <td class="">Intro</td>
                                            </tr>
                                            <tr class="">
                                            <th scope="row">4</th>
                                                <td class="">2012/03/29</td>
                                                <td class="">Mark</td>
                                                <td class="">Avanza</td>
                                                <td class="">IDR 450000</td>
                                                <td class="">Customer order our vechicle</td>
                                                <td class="">Intro</td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    </div>
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