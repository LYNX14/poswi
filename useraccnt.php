<?php
include 'temp/navbar.php';
?>
<?php startblock('useraccnt') ?>

        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet box red">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="caption-subject bold uppercase"> Manage Account Information</span>
                                        </div>

                                    </div>
                                    <div class="portlet-body">

                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th> User ID </th>
                                                    <th> Username </th>
                                                    <th> Password</th>
                                                    <th> Email </th>
                                                    <th> Branch </th>
                                                    <th> Status </th>
                                                    <th> Update </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                   <td class="center"> 1 </td>
                                                    <td class="center"> joemz </td>
                                                    <td class="center"> 1234456 </td>
                                                    <td class="center"> joemz@gmail.com </td>
                                                    <td class="center"> branche 1 </td>
                                                   <td>
                                                            <span class="label label-sm label-danger"> Disabled </span>
                                                   </td>
                                                    <td>
                                                      <a href="javascript:;" class="btn btn-outline btn-circle btn-sm dark">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                     </td>                                               
                                                </tr>


                                                 <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                   <td class="center"> 1 </td>
                                                    <td class="center"> jacass </td>
                                                    <td class="center"> 23445567 </td>
                                                    <td class="center"> jacass@gmail.com </td>
                                                    <td class="center"> branche 2 </td>
                                                     <td>
                                                            <span class="label label-sm label-success"> Active </span>
                                                    </td>
                                                    <td>
                                                          <a href="javascript:;" class="btn btn-outline btn-circle btn-sm dark">
                                                             <i class="fa fa-edit"></i> Edit </a>
                                                      </td>
                                                    
                                                </tr>

                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>




<?php endblock() ?>