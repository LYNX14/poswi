<?php
include 'temp/navbar.php';
?>
<?php startblock('branchadd') ?>

        <div class="row">
                            <div class="col-md-12">

                                <div class="portlet box green" id="form_wizard_1">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-dark"></i>
                                            <span class="caption-subject font-red bold uppercase"> Add Branch 
                                                
                                            </span>
                                        </div>

                                    </div>
                                    <div class="portlet-body form">
                                        <form class="form-horizontal" action="#" id="submit_form" method="POST" novalidate="novalidate">
                                            <div class="form-wizard">
                                                <div class="form-body">
                                                    <ul class="nav nav-pills nav-justified steps">
                                                        <li class="active">
                                                            <a href="#tab1" data-toggle="tab" class="step" aria-expanded="true">
                                                                <span class="number"> 1 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> Branch Setup </span>
                                                            </a>
                                                        </li>
                                                       


                                                    </ul>
                                                    <div id="bar" class="progress progress-striped" role="progressbar">
                                                        <div class="progress-bar progress-bar-red" style="width: 25%;"> </div>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="alert alert-danger display-none">
                                                            <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                                        <div class="alert alert-success display-none">
                                                            <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                      

                                      <!-- Start Account User Information -->

                                                        <div class="tab-pane active" id="tab1">
                                                            <h3 class="block">Provide your branch details</h3>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Branch Name
                                                                    <span class="required" aria-required="true"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="username">
                                                                    <span class="help-block"> Provide your branch name </span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Branch Address
                                                                    <span class="required" aria-required="true"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="username">
                                                                    <span class="help-block"> Provide your branch adress </span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Branch Number
                                                                    <span class="required" aria-required="true"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="username">
                                                                    <span class="help-block"> Provide your branch number</span>
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Branch Open
                                                                    <span class="required" aria-required="true"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="email">
                                                                    <span class="help-block"> Provide your branch open</span>
                                                                </div>
                                                            </div>

                                                        
                                                          
                                                         </div>

                                                          <!-- End Accont User Information -->
 
                                                </div>

                                                         <!-- End Profile User Information -->


                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            
                                                            <a href="javascript:;" class="btn btn-outline btn-circle btn-sm red">
                                                             <i class="fa fa-edit"></i> Register </a>
                                                            
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>





<?php endblock() ?>